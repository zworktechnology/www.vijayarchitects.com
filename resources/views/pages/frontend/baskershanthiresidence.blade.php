@php
    $base = 'assets/frontend/img/projects/4. Er. Basker and Mrs.Shanthi residence';

    $project = [
        'title' => 'Er. Basker and Mrs. Shanthi Residence',
        'cover_image' => "{$base}/1.Top Cover Photo/2.Inside image/Full image.jpg",
        'facts' => [
            ['label' => 'Location', 'value' => 'Trichy'],
            ['label' => 'Client', 'value' => 'Bhasker'],
            ['label' => 'Year of completion', 'value' => '2022'],
            ['label' => 'Built-up area', 'value' => '3000 Sq.Ft'],
            ['label' => 'Site area', 'value' => '2500 Sq.Ft'],
            ['label' => 'Site engineer', 'value' => 'Er. Baskar and Er. Dixon'],
            ['label' => 'Structural consultant', 'value' => 'Er. J. Ragavendran'],
            [
                'label' => 'Design team',
                'value' => 'Ar. Vijaykumar, Ar. Ashok, Ar. Adharsh, Shanthi, Anitha',
            ],
        ],
        'gallery_images' => [
            "{$base}/2. Detail Photos - 6 nos/02.png",
            "{$base}/2. Detail Photos - 6 nos/04..png",
            "{$base}/2. Detail Photos - 6 nos/05.png",
            "{$base}/2. Detail Photos - 6 nos/06.png",
            "{$base}/2. Detail Photos - 6 nos/07.png",
        ],
        'concept_sections' => [
            [
                'title' => 'Design Concept',
                'paragraphs' => [
                    'This contemporary four-bedroom home is designed for a joint family with members across different age groups. It creates private zones for each individual while still providing generous areas for large family gatherings.',
                    'The main entrance opens into a double-height volume that visually connects the upper-floor rooms with the ground floor. Instead of relying on walls to divide the plan, split levels create a natural hierarchy of spaces while preserving openness and connectivity.',
                    'At the heart of the residence, a central courtyard and staircase bind the home together. This zone includes a sunken living room and an exposed brick wall that acts as the focal point of the interior, while a skylight above the staircase draws attention to the texture of the brickwork and anchors the spatial experience.',
                    'The material palette is dominated by exposed brick and raw concrete. Two landscaped courtyards with skylights further enrich the character of the house and improve the quality of the living environment.',
                ],
            ],
        ],
        'plan_images' => [
            "{$base}/5.. Plans/1.MR.BASKER RESIDENCE_GF PLAN.jpg",
            "{$base}/5.. Plans/2._MR.BASKER RESIDENCE_FF PLAN.jpg",
        ],
    ];
@endphp

@include('pages.frontend.partials.project-detail', ['project' => $project])
