<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FikiAp || {{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>

    @include('partials.navbar')

    <div class="max-w-screen-xl  mx-auto p-4">
        @yield('container')
    </div>
</body>

</html>
