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
                   <div style="background-image: url('/storage/{{$project->img_1}}'); background-position: center; background-size:cover; height: 500px;" class="md:tw-max-h-96 tw-rounded-3xl"></div>
               </div>
               <div class="">
                   <div style="background-image: url('/storage/{{$project->img_2}}'); background-position: center; background-size: cover; height: 500px;" class="tw-max-h-96 tw-rounded-3xl"></div>
               </div>
           </div>
        </div>
    </section>
    <section>
        <div class="tw-py-36 px-3 tw-max-w-7xl mx-auto">
            <div class="tw-max-w-3xl mx-auto text-center">
                <div class="c-header tw-font-black"> RECENT PROJECT</div>
                <div class="c-border mx-auto"></div>
                <div class="md:tw-text-xl tw-text-[15px] tw-text-gray-500">
                    We have work on numerous kind of projects from Building to construction, design and projects managements. here are f
                </div>
                <a class="btn btn-primary px-4 py-2 tw-font-black mt-4" href="/projects">See all Project</a>
            </div>
            <div class="tw-grid tw-gap-4 lg:tw-grid-cols-3 md:tw-grid-cols-2 sm:tw-grid-cols-2  tw-my-20">
                @foreach($projects->take(3) as $project)
                    <div class="tw-relative overflow-hidden tw-cursor-pointer tw-shadow-xl tw-rounded-3xl">
                        <div style="background-image: url('/storage/{{$project->thumbnail}}'); background-position: center; background-size: cover; height: 500px;" class="md:tw-max-h-96 tw-max-h-60"></div>
                        <div class="project-overlay">
                            <div class="tw-w-full tw-flex tw-flex-col tw-items-center tw-justify-center">
                                <p class="md:tw-text-xl tw-text-[15px]">{{$project->category}}</p>
                                <div class="tw-cursor-pointer">
                                    <a href="/projects/{{$project->id}}"><img src="/img/download.svg" alt="" class="tw-w-10 tw-fill-amber-50"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

