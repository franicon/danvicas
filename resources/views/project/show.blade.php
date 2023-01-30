@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">Project Details</div>
            <div class="md:tw-text-xl tw-text-[15px] mt-4">{{$project->category}}</div>
        </x-slot:head>

    </x-big-banner>
    <section class="container tw-py-10">
        <div class="mx-auto md:tw-max-w-4xl tw-text-justify">
            <img src="/storage/{{$project->thumbnail}}" alt="" class="md:w-full mx-auto tw-shadow-xl tw-rounded-3xl">
            <div class="md:tw-text-4xl tw-text-[15px] mt-4 tw-font-bold">{{$project->title}}</div>
            <div class="pt-3 md:tw-text-lg tw-text-[15px]">
               {{$project->description}}
            </div>
           <div class="tw-grid tw-grid-cols-2 tw-gap-4 mt-5">
               <div class="">
                   <img src="/storage/{{$project->img_1}}" alt="" class="tw-shadow-xl tw-rounded-3xl">

               </div>
               <div class="">
                   <img src="/storage/{{$project->img_2}}" alt="" class="tw-shadow-xl tw-rounded-3xl">

               </div>
           </div>
        </div>
        <x-recent-project/>
    </section>

@endsection
