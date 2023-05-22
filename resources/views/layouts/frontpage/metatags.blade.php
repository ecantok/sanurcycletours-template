@if (isset($metadata) && !empty($metadata))
    <meta name="keywords" content="{{ $metadata->keywords }}">
    <meta name="description" content="{{ $metadata->description }}">
    <meta name="author" content="https://sanurcycletours.com">
    <meta name="distribution" content="global" />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $metadata->title }}">
    <meta itemprop="description" content="{{ $metadata->description }}">
    <meta itemprop="image" content="{{ asset($metadata->image) }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ $metadata->url }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metadata->title }}">
    <meta property="og:description" content="{{ $metadata->description }}">
    <meta property="og:image" content="{{ asset($metadata->image) }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metadata->title }}">
    <meta name="twitter:description" content="{{ $metadata->description }}">
    <meta name="twitter:image" content="{{ asset($metadata->image) }}">

    <!-- Meta Tags Generated via http://heymeta.com -->
@else
    <!-- HTML Meta Tags -->
    <title>Sanur Cycle Tours - Guided Tours of Sanur Bali</title>
    <meta name="description"
        content="Sanur Cycle Tours is a100% locally owned and operated business based in central Sanur and we would like to show you the real Sanur village & Bali with our 3 to 4 hour local tours as well as our longer & multi-day adventure cycling Tours. Join us as we take you on a leisurely ride thru the village of Sanur introducing you to village locals and the Balinese culture. Or allow us to share the real Bali & Nusa Penida Island with you on our specialised Adventure rides!">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Sanur Cycle Tours - Guided Tours of Sanur Bali">
    <meta itemprop="description"
        content="Sanur Cycle Tours is a100% locally owned and operated business based in central Sanur and we would like to show you the real Sanur village & Bali with our 3 to 4 hour local tours as well as our longer & multi-day adventure cycling Tours. Join us as we take you on a leisurely ride thru the village of Sanur introducing you to village locals and the Balinese culture. Or allow us to share the real Bali & Nusa Penida Island with you on our specialised Adventure rides!">
    <meta itemprop="image" content="{{ asset('assets/images/favicon.ico') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://sanurcycletours.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sanur Cycle Tours - Guided Tours of Sanur Bali">
    <meta property="og:description"
        content="Sanur Cycle Tours is a100% locally owned and operated business based in central Sanur and we would like to show you the real Sanur village & Bali with our 3 to 4 hour local tours as well as our longer & multi-day adventure cycling Tours. Join us as we take you on a leisurely ride thru the village of Sanur introducing you to village locals and the Balinese culture. Or allow us to share the real Bali & Nusa Penida Island with you on our specialised Adventure rides!">
    <meta property="og:image" content="{{ asset('assets/images/favicon.ico') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sanur Cycle Tours - Guided Tours of Sanur Bali">
    <meta name="twitter:description"
        content="Sanur Cycle Tours is a100% locally owned and operated business based in central Sanur and we would like to show you the real Sanur village & Bali with our 3 to 4 hour local tours as well as our longer & multi-day adventure cycling Tours. Join us as we take you on a leisurely ride thru the village of Sanur introducing you to village locals and the Balinese culture. Or allow us to share the real Bali & Nusa Penida Island with you on our specialised Adventure rides!">
    <meta name="twitter:image" content="{{ asset('assets/images/favicon.ico') }}">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endif
