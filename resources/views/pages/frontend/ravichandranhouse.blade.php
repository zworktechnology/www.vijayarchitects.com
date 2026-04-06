@php
    $base = 'assets/frontend/img/projects/3.Mr. Ravichandran House';

    $project = [
        'title' => 'Mr. Ravichandran House',
        'cover_image' => "{$base}/1.Top Cover Photo/2. For gallery/Full image.jpg",
        'facts' => [
            ['label' => 'Location', 'value' => 'Trichy'],
            ['label' => 'Client', 'value' => 'Mr. Ravichandran'],
            ['label' => 'Year of completion', 'value' => '2019'],
            ['label' => 'Built-up area', 'value' => '2500 Sq.Ft'],
            ['label' => 'Site area', 'value' => '9000 Sq.Ft'],
            ['label' => 'Authority of approval', 'value' => 'Trichy City Corporation, Trichy'],
            ['label' => 'Contractor', 'value' => 'Er. Baskar'],
            ['label' => 'Site engineer', 'value' => 'Er. Manikandan'],
            ['label' => 'Structural consultant', 'value' => 'Er. J. Ragavendran, Venus Builders'],
            ['label' => 'Electrical consultant', 'value' => 'DNR Consultants, Trichy'],
            ['label' => 'Plumbing consultant', 'value' => 'PRIVALS Consultants, Trichy'],
            [
                'label' => 'Design team',
                'value' => 'Ar. Vijaykumar, Ar. Sudhaman, Shanthi, Ar. Rameshwari',
            ],
        ],
        'gallery_images' => [
            "{$base}/2. Detail Photos - 6 nos/03.png",
            "{$base}/2. Detail Photos - 6 nos/04.png",
            "{$base}/2. Detail Photos - 6 nos/05.png",
            "{$base}/2. Detail Photos - 6 nos/06.jpg",
            "{$base}/2. Detail Photos - 6 nos/073.jpeg",
        ],
        'concept_sections' => [
            [
                'title' => 'Design Concept',
                'paragraphs' => [
                    'Located in a serene enclave within a busy part of Trichy, this residence sits in a mixed-use neighborhood alongside three other houses arranged around a shared open space with trees, birds, and squirrels.',
                    'The design began with a large mango tree at the center of the site. Although it could not be retained as part of the built form, its presence informed the creation of a court at the heart of the house. The client\'s collection of traditional utensils, art, furniture, and travel souvenirs, together with a fondness for traditional elements and clean, legible spaces, shaped the design brief.',
                    'Internal level changes around the court gently distinguish visitor spaces from family areas while reducing the climb to the mezzanine master bedroom. The master suite overlooks the dining area and kitchen through a jharokha, reinforcing the hierarchy of spaces. A central courtyard with four wooden columns and an elevated skylight offers a contemporary expression of a traditional house court.',
                    'A sky-lit staircase wall provides an ideal setting for a family photograph collection spanning three generations. The house is completed by two additional bedrooms, a compact study with refurbished wooden shelves and furniture, Athangudi tile finishes, and a terrace reached through short fragmented flights that keep the upper levels accessible.',
                ],
            ],
        ],
        'plan_images' => [
            "{$base}/5. Plans/260403_MR.RAVICHANDRAN-GF PLAN.jpg",
            "{$base}/5. Plans/260403_MR.RAVICHANDRAN-1 FF PLAN.jpg",
        ],
    ];
@endphp

@include('pages.frontend.partials.project-detail', ['project' => $project])
