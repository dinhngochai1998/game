<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">

<head>
    <meta charset="utf-8" />
    <script>
        (function(i, s, o, g, r, a, m) {
            i["GoogleAnalyticsObject"] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga");
        ga("create", "UA-1656435-1", {
            "cookieDomain": "auto"
        });
        ga("set", "anonymizeIp", true);
        ga("send", "pageview");
    </script>
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
    <script type="application/json" data-drupal-selector="drupal-settings-json">
        {
            "path": {
                "baseUrl": "\/",
                "scriptPath": null,
                "pathPrefix": "",
                "currentPath": "node",
                "currentPathIsAdmin": false,
                "isFront": true,
                "currentLanguage": "en"
            },
            "pluralDelimiter": "\u0003",
            "suppressDeprecationErrors": true,
            "cookieconsent": {
                "message": "This website uses cookies to ensure you get the best experience on our website.",
                "dismiss": "OK, got it!",
                "learnMore": "More info about cookies",
                "link": "",
                "path": "\/",
                "expiry": 365,
                "target": "_blank",
                "domain": ".pegi.info",
                "markup": "\u003Cdiv class=\u0022cc_banner cc_container cc_container--open\u0022\u003E\n    \u003Ca href=\u0022#null\u0022 data-cc-event=\u0022click:dismiss\u0022 target=\u0022_blank\u0022 class=\u0022cc_btn cc_btn_accept_all\u0022\u003EOK, got it!\u003C\/a\u003E\n    \u003Cp class=\u0022cc_message\u0022\u003EThis website uses cookies to ensure you get the best experience on our website. \u003Ca data-cc-if=\u0022options.link\u0022 target=\u0022_blank\u0022 class=\u0022cc_more_info\u0022 href=\u0022\u0022\u003EMore info about cookies\u003C\/a\u003E\u003C\/p\u003E\n    \u003Ca class=\u0022cc_logo\u0022 target=\u0022_blank\u0022 href=\u0022http:\/\/silktide.com\/cookieconsent\u0022\u003ECookie Consent plugin for the EU cookie law\u003C\/a\u003E\n\u003C\/div\u003E\n",
                "container": null,
                "theme": false
            },
            "d8_recaptcha_v3": {
                "site_key": "6LfG1PQcAAAAAHthuiwBMT0obZAdUKOjtSJ7YDOs",
                "captcha_selectors": "#user-login-form, #contact-message-contact-us-form",
                "badge_position": "bottomright"
            },
            "google_analytics": {
                "trackOutbound": true,
                "trackMailto": true,
                "trackDownload": true,
                "trackDownloadExtensions": "7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"
            },
            "ajaxTrustedUrl": {
                "https:\/\/pegi.info\/search-pegi": true
            },
            "user": {
                "uid": 0,
                "permissionsHash": "edfc8632da257dde78b6931e5f0c1d94d55328aa3b5de36b28350b198961b252"
            }
        }
    </script>
    <script src="{{ asset('frontend/core/assets/vendor/jquery/jquery.min.js?v=3.5.1') }}"></script>
    <script src="{{ asset('frontend/core/misc/drupalSettingsLoader.js?v=8.9.19') }}"></script>
    <script src="{{ asset('frontend/core/misc/drupal.js?v=8.9.19') }}"></script>
    <script src="{{ asset('frontend/core/misc/drupal.init.js?v=8.9.19') }}"></script>
    <script src="{{ asset('frontend/modules/contrib/cookieconsent/js/cookieconsent.settings.js?v=1.x') }}"></script>
    <script src="{{ asset('frontend/modules/contrib/cookieconsent/js/cookieconsent.min.js?v=1.0.9') }}"></script>
    <script src="{{ asset('frontend/modules/contrib/d8_recaptcha_v3/js/recaptcha.js?r1ku1p') }}" defer="true" async="true"></script>
    <script src="{{ asset('frontend/modules/contvendorrib/google_analytics/js/google_analytics.js?v=8.9.19') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('frontend/themes/pegi/js/autogrow.min.js?r1ku1p') }}"></script>
    <script src="{{ asset('frontend/themes/pegi/js/site-functions.min.js?r1ku1p') }}"></script>

</body>

</html>