@extends('layouts.admin-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <form class="row justify-content-center g-3 mt-5" method="POST" action="/admin/services/{{ $service->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-12">
                    <h3 class="tw-font-bold">Edit Service: {{$service->title}} </h3>
                </div>
                <hr>
                <div class="col-md-2">
                    <div class="tw-text-xl tw-mb-6 tw-font-bold">Links</div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/services') ? 'py-2 tw-font-semibold tw-text-[17px] tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}" href="/admin/services">All Services</a>
                    </div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/services/create') ? 'tw-font-semibold tw-text-[17px] py-2 tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}"
                            href="/admin/services/create">New Service</a>
                    </div>
                </div>
                <div class="col-md-10 tw-border-[1.5px] tw-rounded-3xl py-4">
                    <div class="px-3">
                        <div class="form-floating mb-4">
                            <input type="text" value="{{$service->title}}" name="title" required class="form-control" id="title" placeholder="title">
                            <label for="title">Title: E.g - Design & Build</label>
                            @error('title')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="tw-flex tw-items-center mb-4">
                            <div class="input-group mb-4">
                                <label class="input-group-text" for="image">Change Image</label>
                                <input type="file" name="image" value=" {{$service->image}}" class="form-control" id="inputGroupFile01">
                            </div>
                            <div class="col-2 rounded">
                                <div class="px-2 ">
                                    <img src="/storage/{{$service->image}}" alt="" class="tw-rounded-3xl">
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" name="body" placeholder="body" id="body" style="height: 200px">{{$service->body}}</textarea>
                            <label for="body">Body</label>
                            @error('body')
                            <p class="text-danger tw-py-4">{{$message}}</p>
                            @enderror
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
