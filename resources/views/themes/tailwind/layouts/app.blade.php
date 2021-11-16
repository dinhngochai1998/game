<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>| NISCI SITE</title>
    <link rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" />
    <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" media="all" href="{{ asset('frontend/themes/pegi/css/style.css') }}" />


    <!--[if lte IE 8]>
<script src="/core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3"></script>
<![endif]-->
</head>

<body >
    @include('themes.tailwind.includes.header')
    @yield('content')

    @include('themes.tailwind.includes.footer')

    <script src="{{ asset('frontend/core/assets/vendor/jquery/jquery.min.js?v=3.5.1') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('frontend/themes/pegi/js/autogrow.min.js?r1ku1p') }}"></script>
    <script src="{{ asset('frontend/themes/pegi/js/site-functions.min.js?r1ku1p') }}"></script>
</body>

</html>