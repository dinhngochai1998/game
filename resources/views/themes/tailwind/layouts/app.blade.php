<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <link rel="canonical" href="https://pegi.info/" />
    <link rel="shortlink" href="https://pegi.info/" />
    <meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('frontend/themes/pegi/favicon.ico') }}" type="image/vnd.microsoft.icon" />

    <title>| Pegi Public Site</title>
    <link rel="stylesheet" media="all" href="{{ asset('frontend/core/themes/stable/css/system/components/system-status-counter.css?r1ku1p') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('frontend/core/themes/stable/css/system/components/system-status-report-counters.css?r1ku1p') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('frontend/core/themes/stable/css/system/components/system-status-report-general-info.css?r1ku1p') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('frontend/modules/contrib/video_embed_field/css/video_embed_field.responsive-video.css?r1ku1p') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('frontend/modules/contrib/cookieconsent/css/dark-bottom.css?r1ku1p') }}" />
    <link rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" />
    <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" media="all" href="{{ asset('frontend/themes/pegi/css/style.css?r1ku1p') }}" />


    <!--[if lte IE 8]>
<script src="/core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3"></script>
<![endif]-->

    <script>
        var $buoop = {
            vs: {
                i: 11,
                f: -4,
                o: -4,
                s: 8,
                c: -4
            },
            api: 4
        };

        function $buo_f() {
            var e = document.createElement("script");
            e.src = "//browser-update.org/update.min.js";
            document.body.appendChild(e);
        };
        try {
            document.addEventListener("DOMContentLoaded", $buo_f, false)
        } catch (e) {
            window.attachEvent("onload", $buo_f)
        }
    </script>
    
</head>

<body class="home" class="search-pegi">
    @include('themes.tailwind.includes.header')
    @yield('content')

    @include('themes.tailwind.includes.footer')

    <script src="{{ asset('frontend/core/assets/vendor/jquery/jquery.min.js?v=3.5.1') }}"></script>
    <script src="{{ asset('frontend/core/misc/drupalSettingsLoader.js?v=8.9.19') }}"></script>
    <script src="{{ asset('frontend/core/misc/drupal.js?v=8.9.19') }}"></script>
    <script src="{{ asset('frontend/core/misc/drupal.init.js?v=8.9.19') }}"></script>
    <script src="{{ asset('frontend/modules/contrib/d8_recaptcha_v3/js/recaptcha.js?r1ku1p') }}" defer="true" async="true"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('frontend/themes/pegi/js/autogrow.min.js?r1ku1p') }}"></script>
    <script src="{{ asset('frontend/themes/pegi/js/site-functions.min.js?r1ku1p') }}"></script>
</body>

</html>