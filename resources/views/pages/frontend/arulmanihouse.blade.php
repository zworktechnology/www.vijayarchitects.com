@php
    $base = 'assets/frontend/img/projects/1.Mr.Arulmani';

    $project = [
        'title' => 'Mr. Arulmani House',
        'cover_image' => "{$base}/1.Top Cover Photo & fact sheet/2.Inside image/arulmani elelvation.jpeg",
        'facts' => [
            ['label' => 'Location', 'value' => 'Coimbatore'],
            ['label' => 'Client', 'value' => 'Arul Mani'],
            ['label' => 'Year of completion', 'value' => '2013'],
            ['label' => 'Built-up area', 'value' => '3500 Sq.Ft'],
            ['label' => 'Site area', 'value' => '5000 Sq.Ft'],
            ['label' => 'Authority of approval', 'value' => 'Kalapatti Town Panchayat, Coimbatore'],
            ['label' => 'Contractor', 'value' => 'Thirunavukarasu'],
            ['label' => 'Site engineer', 'value' => 'Er. Sathiyamoorthy'],
            ['label' => 'Structural consultant', 'value' => 'Er. Ram Kumar, Rays Consulting Engineers'],
            ['label' => 'Electrical consultant', 'value' => 'Er. Nagarajan, DNR Consultants'],
            [
                'label' => 'Design team',
                'value' => 'Ar. Vijaykumar, Ar. Senthil, Ar. Ashok, Shanthi, Anitha, Kavitha',
            ],
        ],
        'gallery_images' => [
            "{$base}/2. Detail Photos - 6 nos/01 (2).jpeg",
            "{$base}/2. Detail Photos - 6 nos/02..jpeg",
            "{$base}/2. Detail Photos - 6 nos/03.png",
            "{$base}/2. Detail Photos - 6 nos/04.JPG",
            "{$base}/2. Detail Photos - 6 nos/05. (2).jpeg",
            "{$base}/2. Detail Photos - 6 nos/06..jpeg",
            "{$base}/2. Detail Photos - 6 nos/07.jpg",
            "{$base}/2. Detail Photos - 6 nos/08_.JPG",
            "{$base}/2. Detail Photos - 6 nos/09..JPG",
            "{$base}/2. Detail Photos - 6 nos/10.jpeg",
        ],
        'concept_sections' => [
            [
                'title' => 'Design Concept',
                'paragraphs' => [
                    'This residence in Coimbatore reflects the client\'s interests and hobbies, while responding to the local climate. Ample skylight is introduced with care taken to control glare, and the ventilation strategy makes the best use of the prevailing weather conditions.',
                    'The boundaries between inside and outside are consciously softened to take advantage of the full site. A fish pond at the entry and a narrow strip garden with a rough stone boundary wall help create the desired ambience while reflecting the client\'s lifestyle.',
                    'The completed project fulfills not only the desires and expectations of the family, but also the needs of the plants and pets that form an extended part of the household.',
                ],
            ],
        ],
        'plan_images' => [
            "{$base}/5.Plans/GF PLAN.jpg",
            "{$base}/5.Plans/FF PLAN.jpg",
            "{$base}/5.Plans/SECTION A  A  .jpg",
            "{$base}/5.Plans/SECTION B -B .jpg",
        ],
    ];
@endphp

@include('pages.frontend.partials.project-detail', ['project' => $project])
