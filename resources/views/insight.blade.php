@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">Insight-Details</div>
        </x-slot:head>
    </x-big-banner>
    <div class="tw-max-w-7xl mx-auto tw-py-16">
        <div class="tw-flex lg:tw-flex-row tw-flex-col tw-justify-center lg:tw-items-start tw-items-center">
            <div class="lg:tw-px-6 xl:tw-px-10">
                <img src="/img/post-1.png" alt="" class="tw-rounded-3xl">
                <p class="tw-font-semibold tw-pt-3 tw-text-[17px] text-center tw-text-gray-400">Published 1 week ago</p>
            </div>
            <div class="tw-px-6 lg:tw-px-0 lg:tw-pr-6">
                <a href="/insights" class="tw-no-underline tw-text-xl">Back to Insights</a>
                <div class="tw-text-5xl tw-py-4 tw-font-bold">The era of building a Terrace on main-land</div>
                <div class=" tw-text-justify lg:tw-max-w-3xl md:tw-text-xl tw-text-[16px]">
                    Lorem ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt
                    in accumsan. Facilisis non pharetra ante convallis eleifend at molestie elementum
                    Lorem ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt in
                    accumsan. Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem
                    ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt in accumsan.
                    Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem ipsum dolor sit.
                    accumsan. Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem
                    ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt in accumsan.
                    Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem ipsum dolorsit.
                </div>
                <div class=" tw-text-justify lg:tw-max-w-3xl md:tw-text-xl tw-text-[16px] py-4">
                    Lorem ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt
                    in accumsan. Facilisis non pharetra ante convallis eleifend at molestie elementum
                    Lorem ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt in
                    accumsan. Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem
                    ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt in accumsan.
                    Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem ipsum dolor sit.
                    accumsan. Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem
                    ipsum dolor sit amet consectetur. Arcu eu pellentesque mauris tincidunt in accumsan.
                    Facilisis non pharetra ante convallis eleifend at molestie elementum Lorem ipsum dolorsit.
                </div>
            </div>
        </div>
        <x-testimonials/>
    </div>
@endsection
