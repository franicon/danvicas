@extends('layouts.public-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <form class="row justify-content-center g-3 mt-5" method="POST" action="/login">
                @csrf
                <div class="col-md-6 tw-border-[1.5px] tw-rounded-3xl py-4">
                    <h1 class="text-center py-3 tw-font-bold">Log In!</h1>
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
@endsection
