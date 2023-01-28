@extends('layouts.admin-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <form class="row justify-content-center g-3 mt-5" method="POST" action="/register">
                @csrf
                <div class="col-md-6 tw-border-[1.5px] tw-rounded-3xl py-4">
                    <h1 class="text-center py-3 tw-font-bold">Create Insight</h1>
                    <div class="px-3">
                        <div class="form-floating mb-4">
                            <input type="text" name="name" required class="form-control" id="name" placeholder="name">
                            <label for="name">Title: E.g - Building Terrace on the Mainland</label>
                            @error('name')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" name="email" required class="form-control" id="email" placeholder="name@example.com">
                            <label for="email">Slug: E.g - building-terrace-mainland</label>
                            @error('email')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Body</label>
                            @error('password')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-4 px-3">
                        <button type="submit" class="btn btn-primary px-5 py-2 tw-font-semibold">Publish</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
