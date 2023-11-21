<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            p { color: red; }
        </style>
    </head>

<body>

    @include('partials.menu')

    @yield('content')

    @include('partials.footer')
</body>
</html>
