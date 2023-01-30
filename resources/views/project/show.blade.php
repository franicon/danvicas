@extends('layouts.public-layout')
@section('content')
    <x-big-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">Project Details</div>
            <div class="md:tw-text-xl tw-text-[15px] mt-4">Building Construction</div>
        </x-slot:head>

    </x-big-banner>
    <section class="container tw-py-10">
        <div class="mx-auto md:tw-max-w-4xl tw-text-justify">
            <img src="/img/main-img.png" alt="" class="md:tw-max-w-4xl mx-auto tw-shadow-xl tw-rounded-3xl">
            <div class="md:tw-text-xl tw-text-[15px] mt-4 tw-font-semibold">Construction and Building of a House for a clients</div>
            <div class="pt-3 md:tw-text-lg tw-text-[15px]">
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
            <div class="pt-3 md:tw-text-lg tw-text-[15px]">
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
           <div class="tw-grid tw-grid-cols-2 tw-gap-4 mt-5">
               <div class="">
                   <img src="/img/main-img.png" alt="" class="tw-shadow-xl tw-rounded-3xl">

               </div>
               <div class="">
                   <img src="/img/main-img.png" alt="" class="tw-shadow-xl tw-rounded-3xl">

               </div>
           </div>
        </div>
        <x-recent-project/>
    </section>

@endsection
