<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Danvicas</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-nav-bar/>
    @yield('content')
    <x-footer/>
@if(session()->has('success'))
    <div class="position-absolute top-0 end-0 mx-5 mt-2">
        <div class="alert alert-success alert-dismissible fade show pb-0"  role="alert">
            <p class="">{{session()->get('success')}}  </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
</body>
</html>
