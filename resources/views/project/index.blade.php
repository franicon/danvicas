@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-3xl text-center">OUR WORKS IN 15 YEARS </div>
        </x-slot:head>
    </x-big-banner>
    <div class="tw-max-w-7xl mx-auto">
        {{--        Instro Section--}}
        <section>
            <div class=" px-3">
                <div class="tw-grid tw-gap-6 lg:tw-grid-cols-3 md:tw-grid-cols-2 sm:tw-grid-cols-2  tw-my-20">
                    @foreach($projects as $project)
                        <div class="tw-relative overflow-hidden tw-cursor-pointer tw-shadow-xl tw-rounded-3xl">
                            <div style="background-image: url('/storage/{{$project->thumbnail}}'); background-position: center; background-size: cover; height: 500px;" class="md:tw-max-h-96 tw-max-h-60"></div>
                            <div class="project-overlay">
                                <div class="tw-w-full tw-flex tw-flex-col tw-items-center tw-justify-center">
                                    <p class="md:tw-text-xl tw-text-[15px]">{{$project->category}}</p>
                                    <div class="tw-cursor-pointer">
                                        <a href="/projects/{{$project->id}}"><img src="/img/download.svg" alt="" class="tw-w-10 tw-fill-amber-50 "></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="">{{$projects->links()}}</div>
                </div>
            </div>
        </section>
        @if($testimonials->count())
            <section class="tw-pt-20 px-3">
                <div class="tw-max-w-3xl mx-auto text-center">
                    <div class="c-header tw-font-black">WHAT OUR CLIENT'S SAY</div>
                    <div class="c-border mx-auto"></div>
                    <div class="md:tw-text-xl tw-text-[15px] tw-text-gray-500">
                        We have had numerous great feedback from our clients.
                    </div>
                </div>
                <div class="tw-grid md:tw-grid-cols-2">
                    @foreach($testimonials as  $testimonial)
                        <x-testimonials :testimonial="$testimonial"/>
                    @endforeach
                </div>
            </section>
        @endif
        </div>
@endsection

