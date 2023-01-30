@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">Insight-Details</div>
        </x-slot:head>
    </x-big-banner>
    <div class="md:tw-max-w-7xl tw-max-w-full mx-auto tw-py-16">
        <div class="tw-flex lg:tw-flex-row tw-flex-col tw-justify-center lg:tw-items-start tw-items-center">
            <div class="lg:tw-px-6 xl:tw-px-10">
                <div style="background-image:url('/storage/{{$insight->thumbnail}}');" class=" lg:tw-rounded-3xl thumbnail"></div>
                <p class="tw-font-semibold tw-pt-3 tw-text-[17px] text-center tw-text-gray-400">Published {{ $insight->created_at->diffForHumans() }}</p>
            </div>
            <div class="tw-px-4 lg:tw-px-0 lg:tw-pr-6">
                <a href="/insights" class="tw-no-underline md:tw-text-xl tw-text-gray-800 ">Back to Insights</a>
                <div class="md:tw-text-5xl  tw-text-2xl tw-py-4 tw-font-bold md:tw-max-w-xl">{{$insight->title}}</div>
                <div class=" tw-text-justify lg:tw-max-w-3xl md:tw-max-w-xl md:tw-text-xl tw-text-[15px]">{{$insight->first_body}}</div>
                <div class=" tw-text-justify lg:tw-max-w-3xl md:tw-max-w-xl md:tw-text-xl tw-text-[16px] py-3">{{$insight->first_body}}</div>
            </div>
        </div>
        <x-testimonials/>
    </div>
@endsection
