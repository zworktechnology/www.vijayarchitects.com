@php
    $base = 'assets/frontend/img/projects/6.Yercaud Guest  House';

    $project = [
        'title' => 'Yercaud House',
        'cover_image' => "{$base}/2. Detail Photos - 6 nos/01.jpg",
        'facts' => [
            ['label' => 'Location', 'value' => 'Yercaud'],
            ['label' => 'Client', 'value' => 'Dr. Ravindran'],
            ['label' => 'Year of completion', 'value' => '2019'],
            ['label' => 'Built-up area', 'value' => '2300 Sq.Ft'],
            ['label' => 'Site area', 'value' => '9000 Sq.Ft'],
            ['label' => 'Contractor', 'value' => 'M/S. STS Associates'],
            ['label' => 'Site engineer', 'value' => 'R. Sellathambi'],
            ['label' => 'Structural consultant', 'value' => 'Er. J. Ragavendran'],
            ['label' => 'Electrical consultant', 'value' => 'Alfa Associates, Trichy'],
            ['label' => 'Plumbing consultant', 'value' => 'Alfa Associates, Trichy'],
            [
                'label' => 'Design team',
                'value' => 'Ar. Vijaykumar, Ar. Sudhaman, Anitha',
                'class' => 'col-md-6 mb-3',
            ],
        ],
        'gallery_images' => [
            "{$base}/2. Detail Photos - 6 nos/01.jpg",
            "{$base}/2. Detail Photos - 6 nos/02.jpg",
            "{$base}/2. Detail Photos - 6 nos/03.jpg",
            "{$base}/2. Detail Photos - 6 nos/04.jpg",
            "{$base}/2. Detail Photos - 6 nos/05.jpg",
            "{$base}/2. Detail Photos - 6 nos/06.jpeg",
        ],
        'concept_sections' => [
            [
                'title' => 'Design Concept',
                'paragraphs' => [
                    'The brief was to design a straightforward two-bedroom vacation house within a well-planned gated community in Yercaud.',
                    'The site had a steep slope, making access to the higher level difficult, yet the views from that position were too valuable to ignore. The design therefore had to capture the vistas while also complying with the community bylaws governing the building\'s dimensions, height, and materials.',
                    'The result is a partially stilted house with a concealed elevator room and a broken flight of steps built from stones taken from the site so that the approach blends into the landscape. Rainwater from the sloping roofs is channelled along the form of the roof and down the lift room wall, where it is filtered and collected to ensure an adequate water supply through the summer.',
                ],
            ],
        ],
        'plan_images' => [
            "{$base}/5. Plans/260403_MR.RAVINDRAN RESIDENCE-BASEMENT FLOOR PLAN.jpg",
            "{$base}/5. Plans/260403_Yercaud house -GROUND FLOOR PLAN.jpg",
        ],
    ];
@endphp

@include('pages.frontend.partials.project-detail', ['project' => $project])
