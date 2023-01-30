@extends('layouts.admin-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <form class="row justify-content-center g-3 mt-5" method="POST" action="/admin/projects" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <h3 class="tw-font-bold">Publish New Project</h3>
                </div>
                <hr>
                <div class="col-md-2">
                    <div class="tw-text-xl tw-mb-6 tw-font-bold">Links</div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/projects') ? 'py-2 tw-font-semibold tw-text-[17px] tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}" href="/admin/insights">All Projects</a>
                    </div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/projects/create') ? 'tw-font-semibold tw-text-[17px] py-2 tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}"
                            href="/admin/insights/create">New Project</a>
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
                            <textarea class="form-control" name="first_body" placeholder="first_body" id="first_body" style="height: 200px"></textarea>
                            <label for="first_body">First Body</label>
                            @error('first_body')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" name="second_body" placeholder="second_body" id="second_body" style="height: 200px"></textarea>
                            <label for="second_body">Second Body</label>
                            @error('second_body')
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
