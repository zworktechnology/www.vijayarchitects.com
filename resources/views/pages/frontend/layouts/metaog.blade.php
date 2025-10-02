<title>{{ $metaog ? $metaog->meta_title : 'Vijay Estates' }}</title>

<!-- Meta Data -->
<meta name="description" content="{{ $metaog ? $metaog->meta_description : 'Vijay Estates' }}">
<meta name="keywords" content="{{ $metaog ? $metaog->meta_keyword : 'Vijay Estates, Vijay Estates' }}">
<meta name="author" content="Zwork Technology">

<meta property="og:type" content="{{ $metaog ? $metaog->og_type : 'website' }}">
<meta property="og:url" content="{{ env('APP_URL') }}/{{ $metaog ? $metaog->og_url : '' }}">
<meta property="og:title" content="{{ $metaog ? $metaog->og_title : 'Vijay Estates' }}">
<meta property="og:description" content="{{ $metaog ? $metaog->og_description : 'Vijay Estates' }}">
<meta property="og:image"
    content="{{ $metaog ? asset('assets/backend/ogimage/' . $metaog->og_image) : asset('assets/frontend/img/logo/favicon.webp') }}"
    alt="{{ $metaog ? $metaog->og_alt : 'Vijay Estates' }}">
