<!-- Favicon -->
<!-- <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/favicon.ico') }}"/> -->
<!-- Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- Slick slider -->
<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
<!-- Theme color -->
<link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">

<!-- Main Style -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

<!-- Fonts -->

<!-- Poppins For Title -->
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    integrity="sha384-/rJKQnzOkEo+daG0jMjU1IwwY9unxt1NBw3Ef2fmOJ3PW/TfAg2KXVoWwMZQZtw9" crossorigin="anonymous">

<style>
    .carousel .carousel-control-prev-icon::after,
    .carousel .carousel-control-next-icon::after {
        content: '' !important;
    }

    .carousel .carousel-control-prev-icon {
        /* change fill="currentColor" to %23fff to make it white  */
        background-image: url('data:image/svg+xml,<svg class="bi bi-arrow-left-circle-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="%23fff " xmlns="http://www.w3.org/2000/svg">  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>');
    }

    .carousel .carousel-control-next-icon {
        /* change fill="currentColor" to %23fff to make it white  */
        background-image: url('data:image/svg+xml,<svg class="bi bi-arrow-right-circle-fill" viewBox="0 0 20 20" fill="%23fff" xmlns="http://www.w3.org/2000/svg"><path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>');
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        /* Use to adjust size of icons */
        width: 3rem;
        height: 3rem;
    }

    .main-text {
        color: #FFF;
        position: absolute;
        left: 10%;
        right: 10%;
        width: 80%;
        height: 100%;
        z-index: 10;
        padding-left: 50px;
        padding-right: 50px;
    }

    .main-text-mobile {
        display: none;
    }

    .big-transition {
        transition: 0.2s !important;
        text-transform: uppercase;
        font-size: 1.75rem;
    }

    .big-transition:hover {
        transform: scale(1.2) !important;

    }

    .zoom {
        animation: scale 20s linear infinite;
    }

    @keyframes scale {
        50% {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }
    }

    @media only screen and (max-width: 768px) {
        .main-text {
            top: 16px;
        }

        .main-text {
            display: none !important;
        }

        .main-text-mobile {
            display: block;
        }
    }

    .btn-outline-light:hover,
    .btn-outline-light:focus {
        background-color: initial;
        color: #f8f9fa;
    }
</style>

@stack('extrastyle')
