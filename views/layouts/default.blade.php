<!doctype html>
<html lang="en">
<head>

    @include('cartzilla::partials.head')
    @yield('head')

</head>
<body class="handheld-toolbar-enabled">
    @include('cartzilla::partials.navbar')
    @yield('content')
    @include('cartzilla::partials.footer')


    @include('cartzilla::partials.js')
    @yield('foot')

</body>
</html>
