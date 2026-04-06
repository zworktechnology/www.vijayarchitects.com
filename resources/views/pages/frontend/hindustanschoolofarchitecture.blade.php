@php
    $base = 'assets/frontend/img/projects/5.Hindustan school of architecture';

    $project = [
        'title' => 'Hindustan School of Architecture',
        'cover_image' => "{$base}/1.Top Cover Photo/2. Inside image/03_THIRD .jpg",
        'facts' => [
            ['label' => 'Location', 'value' => 'Coimbatore'],
            ['label' => 'Client', 'value' => 'Hindustan Group of Schools, Coimbatore'],
            ['label' => 'Year of completion', 'value' => '2020'],
            ['label' => 'Built-up area', 'value' => '90000 Sq.Ft'],
            ['label' => 'Authority of approval', 'value' => 'Malumichapatti, Coimbatore'],
            ['label' => 'Contractor', 'value' => 'Sri Mahalaxmi Constructions, Coimbatore'],
            ['label' => 'Site engineer', 'value' => 'Er. Varun'],
            ['label' => 'Structural consultant', 'value' => 'Er. Ramkumar, Rays Consulting Engineers, Bangalore'],
            ['label' => 'Electrical consultant', 'value' => 'Alfa Associates, Trichy'],
            ['label' => 'Plumbing consultant', 'value' => 'Alfa Associates, Trichy'],
            [
                'label' => 'Design team',
                'value' => 'Ar. Vijaykumar, Ar. Sudhaman, Anitha, Ar. Hari Karthikvel',
                'class' => 'col-md-6 mb-3',
            ],
        ],
        'gallery_images' => [
            "{$base}/2. Detail Photos - 6 nos/photos/01_FIRST.jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/02_SECOND .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/03_THIRD .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/04_FOURTH.jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/05_FIFTH .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/06_SIXTH .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/07_SEVENTH .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/08_EIGHTH .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/09_NINETH .jpg",
            "{$base}/2. Detail Photos - 6 nos/photos/10.jpg",
        ],
        'concept_sections' => [
            [
                'title' => 'Spatial Organization & Circulation',
                'paragraphs' => [
                    'Located in Coimbatore, Hindustan School of Architecture is conceived as a living ecosystem where young designers can create, study, and collaborate seamlessly. The architecture emphasizes spatial hierarchy, environmental connectivity, and the informal, evolving needs of design students.',
                    'The layout is organized around a primary spine that acts both as a divider and a connector for the program. The administrative wing anchors one end, while communal functions such as the canteen, seminar halls, and multipurpose hall form the other.',
                    'Studio spaces are arranged in pairs around outdoor courtyards that support the natural spillage of architectural work, including model-making and large-format creative activity. A central library on the first floor acts as the pivot of the building; although it separates certain blocks physically, it also bridges them, and its mezzanine level creates a voluminous space for research and contemplation.',
                ],
            ],
            [
                'title' => 'Environmental & Sensory Experience',
                'paragraphs' => [
                    'The design maintains a constant connection between the interior and the landscape through varying scales of volume. Internal courtyards serve as acoustic and visual buffers between focused classroom environments and circulation spaces.',
                    'Skylit courtyards bring natural light deep into the building and assist passive ventilation. Jaali brick walls and carefully positioned openings preserve visual contact with the outdoors as users move through the institution.',
                    'Together, these strategies allow the campus to function as more than a collection of rooms. It becomes a cohesive learning environment that mirrors the interactive and fluid nature of architectural education.',
                ],
            ],
        ],
        'plan_images' => [
            "{$base}/5. Plans/0.SITEPLAN_FIN.jpg",
            "{$base}/5. Plans/1.GF.jpg",
            "{$base}/5. Plans/2.FF.jpg",
        ],
    ];
@endphp

@include('pages.frontend.partials.project-detail', ['project' => $project])
