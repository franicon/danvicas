@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">insights</div>
        </x-slot:head>
    </x-big-banner>
    <div class="tw-max-w-7xl mx-auto tw-py-16">
        <article class="tw-mb-24 px-3">
            <div class="tw-grid tw-gap-4 lg:tw-grid-cols-3 md:tw-grid-cols-2 tw-grid-cols-1 tw-my-20">
                @foreach($insights as $insight)
                    <div class="tw-bg-white hover:tw-shadow-xl tw-transition-all tw-cursor-pointer tw-my-5">
                        <div class=""><img src="/storage/{{$insight->thumbnail}}" alt="" class="tw-max-w-full tw-rounded-t-3xl"></div>
                        <div class="tw-py-6 md:tw-px-4 tw-px-3">
                            <div class="tw-text-gray-500">January, 21, 2023</div>
                            <div class="tw-text-xl">{{$insight->title}}</div>
                            <div class="tw-py-2">{{$insight->body}}</div>
                            <div class="pt-2">
                                <a href="/insight/{{$insight->slug}}" class="tw-no-underline">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </article>
        <x-testimonials/>
    </div>
@endsection
