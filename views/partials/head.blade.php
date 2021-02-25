<!-- Required meta tags -->
<meta charset="utf-8">
<title>{{ @$title ?: App\Models\Option::getValue('siteName') }}</title>
<!-- SEO Meta Tags-->
<meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
<meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
<meta name="author" content="Createx Studio">
<!-- Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon and Touch Icons-->
<link rel="apple-touch-icon" sizes="180x180" href="/themes/cartzilla/assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/themes/cartzilla/assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/themes/cartzilla/assets/favicon-16x16.png">
<link rel="manifest" href="/themes/cartzilla/assets/site.webmanifest">
<link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<script type="text/javascript" src="https://unpkg.com/vuex@3.6.0/dist/vuex.min.js"></script>

<!-- Vendor Styles including: Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/vendor/simplebar/dist/simplebar.min.css" />
<link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/vendor/tiny-slider/dist/tiny-slider.css" />
<link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/vendor/drift-zoom/dist/drift-basic.min.css" />
<link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/vendor/lightgallery.js/dist/css/lightgallery.min.css" />
<!-- Main Theme Styles + Bootstrap-->
<link rel="stylesheet" media="screen" href="/themes/cartzilla/assets/css/theme.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="canonical" href="{{ strtolower(url(Request::path())) }}" />

<!-- Vuex store -->
@include('cartzilla::partials.store')

<!-- Inline css -->
{!! \App\Models\Option::getValue('headCode') !!}
