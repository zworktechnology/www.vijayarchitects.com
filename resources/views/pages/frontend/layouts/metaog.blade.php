<title>{{ $metaog ? $metaog->meta_title : 'Kannaas & CO' }}</title>

<!-- Meta Data -->
<meta name="description" content="{{ $metaog ? $metaog->meta_description : 'Kannaas & CO' }}">
<meta name="keywords" content="{{ $metaog ? $metaog->meta_keyword : 'Kannaas & CO, Kannaas & CO' }}">
<meta name="author" content="Zwork Technology">

<meta property="og:type" content="{{ $metaog ? $metaog->og_type : 'website' }}">
<meta property="og:url" content="{{ env('APP_URL') }}/{{ $metaog ? $metaog->og_url : '' }}">
<meta property="og:title" content="{{ $metaog ? $metaog->og_title : 'Kannaas & CO' }}">
<meta property="og:description" content="{{ $metaog ? $metaog->og_description : 'Kannaas & CO' }}">
<meta property="og:image"
    content="{{ $metaog ? asset('assets/backend/ogimage/' . $metaog->og_image) : asset('assets/frontend/img/logo/favicon.webp') }}"
    alt="{{ $metaog ? $metaog->og_alt : 'Kannaas & CO' }}">
