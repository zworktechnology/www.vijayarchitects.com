@php
    $base = 'assets/frontend/img/projects/2.The Thinnai house (Dr.Anand House_';

    $project = [
        'title' => 'The Thinnai House',
        'cover_image' => "{$base}/1.Top Cover Photo & fact sheet/1.Cover image/COVER IMAGE.jpg",
        'facts' => [
            ['label' => 'Location', 'value' => 'Trichy'],
            ['label' => 'Year of completion', 'value' => '2016'],
            ['label' => 'Built-up area', 'value' => '6000 Sq.Ft'],
            ['label' => 'Site area', 'value' => '9500 Sq.Ft'],
            ['label' => 'Contractor', 'value' => 'Er. Baskar'],
            ['label' => 'Site engineer', 'value' => 'Er. Manikandan'],
            ['label' => 'Structural consultant', 'value' => 'Er. J. Ragavendran'],
            ['label' => 'Electrical consultant', 'value' => 'DNR Consultants, Trichy'],
            ['label' => 'Plumbing consultant', 'value' => 'PRIVALS Consultants, Trichy'],
            [
                'label' => 'Design team',
                'value' => 'Ar. Vijaykumar, Ar. Sudhaman, Ar. Rameshwari, Anitha, Ar. Srinidhi',
                'class' => 'col-md-6 mb-3',
            ],
        ],
        'gallery_images' => [
            "{$base}/2. Detail Photos - 6 nos/01.png",
            "{$base}/2. Detail Photos - 6 nos/02.png",
            "{$base}/2. Detail Photos - 6 nos/03.jpg",
            "{$base}/2. Detail Photos - 6 nos/04 .png",
            "{$base}/2. Detail Photos - 6 nos/05.png",
            "{$base}/2. Detail Photos - 6 nos/06..png",
            "{$base}/2. Detail Photos - 6 nos/08.png",
        ],
        'concept_sections' => [
            [
                'title' => 'Design Philosophy',
                'paragraphs' => [
                    'This residence uses a palette of raw materials to create a home that is both sustainable and visually rich. Exposed wire-cut brick, granite, timber, lime mortar, and lime plaster come together to produce a tactile and memorable living environment.',
                    'The exterior is dominated by sloped terracotta tile roofs and deep overhangs. These elements draw from traditional building practices while improving thermal comfort within the house. The overall architectural language is rooted in modern vernacularism.',
                ],
            ],
            [
                'title' => 'Spatial Configuration',
                'paragraphs' => [
                    'A wide veranda at the entrance offers a generous threshold for receiving guests and acts as a buffer to the more private parts of the home, while also connecting the house to the street. The ground floor centers on an expansive open-plan core that combines the living, family, and dining spaces, with natural light and height amplifying the transition between zones.',
                    'The upper level is dedicated to privacy and rest, with three bedrooms arranged around a central circulation spine. A large open-to-sky terrace acts as an elevated courtyard for gatherings or a private garden, and a dedicated study is set apart as a quiet work-from-home retreat.',
                    'Exposed brickwork, grey granite, teak wood, and terracotta roofing define the material palette. Large openings, louvered screens, decks, and semi-open verandas ensure continuous cross-ventilation and maintain visual and physical links to the landscape, while double-height spaces lend openness to the central family zones.',
                ],
            ],
        ],
        'plan_images' => [
            "{$base}/5. Plans/1.DR.ANAND_RESIDENCE -GF PLAN.jpg",
            "{$base}/5. Plans/2.DR.ANAND_RESIDENCE - FF PLAN.jpg",
        ],
    ];
@endphp

@include('pages.frontend.partials.project-detail', ['project' => $project])
