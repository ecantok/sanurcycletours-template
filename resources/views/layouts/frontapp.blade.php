<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Sanur Cycle Tours')</title>
    @include('layouts.frontpage.metatags')

    @include('layouts.frontpage.styles')
    {{-- @vite(['resources/js/app.js']) --}}
    @stack('style')
  </head>
  <body>
    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <a aria-label="Chat on WhatsApp" class="contact-button" href="#">
        <i class="fa fa-whatsapp"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->
    
    @include('layouts.frontpage.header')
    <main id="main">
      @yield('content')
    </main>
    @include('layouts.frontpage.footer')
    @include('layouts.frontpage.scripts')
    @stack('script')
  </body>
</html>
