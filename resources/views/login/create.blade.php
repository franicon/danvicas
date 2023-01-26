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
<body class="tw-bg-gray-200">
<div class="tw-h-screen tw-flex tw-justify-center tw-items-center mx-auto">
    <section class="container tw-py-10">
        <form class="row justify-content-center g-3 mt-5" method="POST" action="/login">
            @csrf
            <div class="col-md-6 tw-bg-white tw-border-[1.5px] tw-rounded-3xl py-4 tw-shadow-xl">
                <h1 class="text-center py-3 tw-font-black tw-text-blue-500 tw-text-3xl">DANVICAS</h1>
                <div class="tw-py-6 tw-px-6">
                    <div class="tw-text-xl tw-font-bold">Welcome to Danvicas! 👋</div>
                    <div class="tw-text-md">Please sign-in to your account to get started.</div>
                </div>
                <div class="px-3">
                    <div class="form-floating mb-4">
                        <input type="email" name="email" required class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Enter Email Address</label>
                        @error('email')
                        <p class="text-danger tw-py-4">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password"  name="password" required class="form-control" id="password" placeholder="password">
                        <label for="password">Choose password</label>
                        @error('password')
                        <p class="text-danger tw-py-4">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-12 mt-4 px-3">
                    <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                </div>
            </div>
        </form>
    </section>
</div>
</body>
</html>

