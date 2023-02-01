@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4x">GET A QUOTE</div>
        </x-slot:head>
    </x-big-banner>
    <section class="container tw-py-10">
        <form class="row g-3 mt-5 justify-content-center" method="POST" action="/send-email">
            @csrf
            <div class="col-md-6">
                <div class="px-3 row">
                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <input type="text" name="first_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="first_name">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-2">
                            <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-3">
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-3">
                    <div class="form-floating mb-2">
                        <input type="number" name="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-3">
                    <div class="form-floating mb-2">
                        <input type="text" name="project_title" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Project Title</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="about_company" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">About your company</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="px-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="about_project" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">More info about project</label>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 px-3">
                <button type="submit" class="btn btn-primary px-5 py-2">Send Message</button>
            </div>
        </form>
    </section>

@endsection
