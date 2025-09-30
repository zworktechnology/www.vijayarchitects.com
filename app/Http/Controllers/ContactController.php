<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'cf-turnstile-response' => ['required', Rule::turnstile()],
        ], [
            'cf-turnstile-response.required' => 'Captcha is required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = new Contact();

        $data->unique_code = Str::random(5);

        $data->name = $request->get('name');
        $data->phone = $request->get('phone');
        $data->email = $request->get('email');
        $data->subject = $request->get('subject');
        $data->message = $request->get('message');

        $data->save();

        // live
        //$admin_number = 9677442152;
        // lcoal
        $admin_number = 8838746579;

        $name = $request->get('name');
        $clinet_phone = $request->get('phone');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $message = $request->get('message');

        $template = 'Hi%20M/s%20Kannaas%20and%20Co%20-%20Admin%0A%0ANew%20contact%20request%20has%20submitted%20with%20the%20following%20information%0A%0A*Name*%20:%20' . $name . '%0A*Phone%20Number*%20:%20' . $clinet_phone . '%0A*Email*%20:%20' . $email . '%0A*Suject*%20:%20' . $subject . '%0A*Message*%20:%20' . $message . '%0A%0AGood luck!';


        $access_token_key = env('WHATSAPP_ACCESS_TOKEN');
        $instance_id_key = env('WHATSAPP_INSTANCE_ID');

        $response = http::post('https://app.wapionline.com/api/send?number=91' . $admin_number . '&type=text&message=' . $template . '&instance_id=' . $instance_id_key . '&access_token=' . $access_token_key . '');

        if ($response->successful()) {
            return view('pages.frontend.layouts.redirect');
        } else {
            return redirect()->route('contactus');
        }
    }
}
