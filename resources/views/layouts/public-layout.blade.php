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
    <div class="container-fluid tw-max-w-7xl align-items-center">
        <a class=" tw-text-slate-900 tw-no-underline tw-font-black tw-text-2xl " href="/">DANVICAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav tw-text-lg mx-auto mt-4">
                <li class="nav-item px-2">
                    <a class="nav-link active tw-font-bold " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link tw-text-slate-900 " href="#">Services</a>
                    <div class="lg:tw-border-2 tw-w-8 mx-auto mt-2 tw-border-blue-500 rounded"></div>

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
            <form class="d-flex" role="search">
                <button class=" tw-border tw-border-0 tw-px-8 tw-py-3 hover:tw-border-gray-800 tw-duration-200">Quotation</button>
            </form>
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
