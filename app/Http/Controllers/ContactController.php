<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ], [
            'cf-turnstile-response.required' => 'Captcha is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $contact = Contact::create([
            'unique_code' => Str::random(5),
            'name' => $request->string('name')->toString(),
            'phone' => $request->string('phone')->toString(),
            'email' => $request->string('email')->toString(),
            'subject' => $request->string('subject')->toString(),
            'message' => $request->string('message')->toString(),
        ]);

        if (! $this->hasWhatsappConfig()) {
            Log::warning('WhatsApp Cloud API is not fully configured for contact notifications.', [
                'contact_id' => $contact->id,
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Your enquiry was saved, but the WhatsApp notification could not be sent because the Meta API settings are incomplete.');
        }

        $response = Http::withToken(config('services.whatsapp.access_token'))
            ->acceptJson()
            ->asJson()
            ->post($this->whatsappEndpoint(), $this->buildWhatsappPayload($contact));

        if ($response->successful()) {
            return view('pages.frontend.layouts.redirect');
        }

        Log::error('Meta WhatsApp Cloud API contact notification failed.', [
            'contact_id' => $contact->id,
            'status' => $response->status(),
            'response' => $response->json() ?? $response->body(),
        ]);

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Your enquiry was saved, but the WhatsApp notification could not be sent. Please try again or call the office directly.');
    }

    private function hasWhatsappConfig(): bool
    {
        return filled(config('services.whatsapp.api_url'))
            && filled(config('services.whatsapp.access_token'))
            && filled(config('services.whatsapp.phone_number_id'))
            && filled(config('services.whatsapp.recipient_number'))
            && filled(config('services.whatsapp.template_name'));
    }

    private function whatsappEndpoint(): string
    {
        return rtrim((string) config('services.whatsapp.api_url'), '/') . '/'
            . trim((string) config('services.whatsapp.phone_number_id'), '/') . '/messages';
    }

    private function buildWhatsappPayload(Contact $contact): array
    {
        return [
            'messaging_product' => 'whatsapp',
            'to' => $this->formatWhatsappNumber((string) config('services.whatsapp.recipient_number')),
            'type' => 'template',
            'template' => [
                'name' => (string) config('services.whatsapp.template_name'),
                'language' => [
                    'code' => (string) config('services.whatsapp.template_language', 'en_US'),
                ],
                'components' => [
                    [
                        'type' => 'body',
                        'parameters' => [
                            ['type' => 'text', 'text' => $this->buildAdminAlertDetails($contact)],
                        ],
                    ],
                ],
            ],
        ];
    }

    private function buildAdminAlertDetails(Contact $contact): string
    {
        $details = sprintf(
            'Name: %s | Phone: %s | Email: %s | Subject: %s | Message: %s',
            $this->normalizeTemplateText($contact->name, 60),
            $this->normalizeTemplateText($contact->phone, 25),
            $this->normalizeTemplateText($contact->email, 80),
            $this->normalizeTemplateText($contact->subject, 80),
            $this->normalizeTemplateText($contact->message, 650)
        );

        return $this->normalizeTemplateText($details, 900);
    }

    private function formatWhatsappNumber(string $number): string
    {
        return preg_replace('/\D+/', '', $number) ?? '';
    }

    private function normalizeTemplateText(?string $value, int $limit = 1024): string
    {
        $text = trim((string) preg_replace('/\s+/', ' ', (string) $value));

        return Str::limit($text !== '' ? $text : '-', $limit, '...');
    }
}
