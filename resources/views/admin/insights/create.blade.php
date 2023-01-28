@extends('layouts.admin-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <form class="row justify-content-center g-3 mt-5" method="POST" action="/admin/insights" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <h3 class="tw-font-bold">Publish New Insight</h3>
                </div>
                <hr>
                <div class="col-md-2">
                    <div class="tw-text-xl tw-mb-6 tw-font-bold">Links</div>
                    <div class="tw-b-6">
                        <a class="text-center tw-text-xl tw-no-underline tw-my-6" href="">Dashboard</a>
                    </div>
                    <div class="">
                        <a class="text-center py-3 tw-text-xl tw-no-underline tw-my-6" href="">Dashboard</a>
                    </div>
                </div>
                <div class="col-md-10 tw-border-[1.5px] tw-rounded-3xl py-4">
                    <div class="px-3">
                        <div class="form-floating mb-4">
                            <input type="text" name="title" required class="form-control" id="title" placeholder="title">
                            <label for="title">Title: E.g - Building Terrace on the Mainland</label>
                            @error('title')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <label class="input-group-text" for="thumbnail">Upload Image</label>
                            <input type="file" name="thumbnail" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="slug" required class="form-control" id="slug" placeholder="slug">
                            <label for="slug">Slug: E.g - building-terrace-mainland</label>
                            @error('slug')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" name="body" placeholder="body" id="body" style="height: 200px"></textarea>
                            <label for="body">Body</label>
                            @error('body')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-4 px-3">
                        <button type="submit" class="btn btn-primary px-5 py-2 tw-font-bold">Publish</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
