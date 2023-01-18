<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Danvicas</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid tw-max-w-7xl tw-py-8">
        <a class=" tw-text-slate-900 tw-no-underline tw-font-black tw-text-2xl " href="/">DANVICAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav tw-text-lg ">
                <li class="nav-item px-2">
                    <a class="nav-link active tw-text-slate-900 tw-bg-blue-200 tw-font-bold tw-rounded-lg px-3" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link tw-text-slate-900" href="#">Services</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Project</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="">News</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
