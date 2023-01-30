@extends('layouts.admin-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <form class="row justify-content-center g-3 mt-5" method="POST" action="/admin/projects/{{ $project->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-12">
                    <h3 class="tw-font-bold">Edit Insight: {{$project->title}} </h3>
                </div>
                <hr>
                <div class="col-md-2">
                    <div class="tw-text-xl tw-mb-6 tw-font-bold">Links</div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/projects') ? 'py-2 tw-font-semibold tw-text-[17px] tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}" href="/admin/projects">All projects</a>
                    </div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/projects/create') ? 'tw-font-semibold tw-text-[17px] py-2 tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}"
                            href="/admin/projects/create">New project</a>
                    </div>
                </div>
                <div class="col-md-10 tw-border-[1.5px] tw-rounded-3xl py-4">
                    <div class="px-3">
                        <div class="form-floating mb-4">
                            <input type="text" name="category" value="{{$project->category}}" required class="form-control" id="category" placeholder="category">
                            <label for="category">Category: Construction</label>
                            @error('category')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="title" value="{{$project->title}}"  required class="form-control" id="title" placeholder="title">
                            <label for="title">Title: House construction for.....</label>
                            @error('title')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <label class="input-group-text" for="thumbnail">Upload Image</label>
                            <input type="file" name="thumbnail" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" name="description" placeholder="description" id="description" style="height: 200px">{{$project->category}}</textarea>
                            <label for="description">Description</label>
                            @error('description')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <label class="input-group-text" for="img_1">Upload Image</label>
                            <input type="file" name="img_1" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="input-group mb-4">
                            <label class="input-group-text" for="img_2">Upload Image</label>
                            <input type="file" name="img_2" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="col-12 mt-4 px-3">
                        <button type="submit" class="btn btn-primary px-5 py-2 tw-font-bold">Update</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
