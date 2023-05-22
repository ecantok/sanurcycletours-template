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
    <meta name="description" content="Sanur cycle tours">
    <meta name="keywords" content="">
    <meta name="author" content="https://sanurcycletours.com">
    <meta name="distribution" content="global" />
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Sanur Cycle Tours">
    <meta itemprop="description" content="Sanur cycle tours">
    <meta itemprop="image" content="{{ asset('assets/images/cycle-logo.jpg') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://sanurcycletours.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sanur Cycle Tours">
    <meta property="og:description" content="Sanur cycle tours">
    <meta property="og:image" content="{{ asset('assets/images/cycle-logo.jpg') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sanur Cycle Tours">
    <meta name="twitter:description" content="Sanur cycle tours">
    <meta name="twitter:image" content="{{ asset('assets/images/cycle-logo.jpg') }}">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endif
