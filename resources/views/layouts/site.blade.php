<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- Freshchat Integration --}}    
 <script
    src='//eu.fw-cdn.com/12797070/777768.js'
    chat='true'>
    </script> 
<head>
    <meta name="rating" content="general">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="Omirai">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://www.omiraitech.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="omirai,omiraitech,tech company,ai company,websites,omirai cameroon,omirai cameroun">
    <meta name="description" content="Omirai is an Artificial Intelligence tech company that provides cutting edge technologies, solutions and services to drive positive change, enhance efficiency and optimize business processes.
    ">
    <meta name="author" content="Omirai Group">
    <meta name="robots" content="index, follow">
    <meta property="fb:admins" content=" ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://omiraitech.com/">
    <meta property="og:image" content="favicon-32x32.png">
    <meta property="og:title" content="Omirai">
    <meta property="og:description"
    content="Omirai is an Artificial Intelligence company that provides cutting edge technologies, solutions and services to drive positive change, enhance efficiency and optimize business processes.">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    
    
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="ma" href="site.webmanifest">
    <link rel="sitemap" href="omirai-sitemap.xml">

    <!-- Color modes -->
    <script src="{{asset('assets/js/vendors/color-modes.js')}}"></script>

    <!-- Libs CSS -->
    <link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{asset('assets/libs/scrollcue/scrollCue.css')}}" />

    <!-- Box icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/css/boxicons.min.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}" />

    <title>Omirai - @yield("title")</title>
    
    @yield("css")

    
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J6NEB48DKC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J6NEB48DKC');
</script>

<body>
    @include('layouts.header.header')

    <main>
        @yield("body")
    </main>

    @include('layouts.footer.footer')
    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/headhesive/dist/headhesive.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{asset('assets/js/theme.min.js')}}"></script>

    <script src="{{asset('assets/libs/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jarallax.js')}}"></script>
    <script src="{{asset('assets/libs/scrollcue/scrollCue.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/scrollcue.js')}}"></script>
    @stack('js')


</body>

</html>
