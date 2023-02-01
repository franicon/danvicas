@extends('layouts.public-layout')
@section('content')
    <x-small-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">Contact Us</div>
        </x-slot:head>
    </x-small-banner>
    <div class="tw-max-w-7xl mx-auto tw-my-12">
        {{--        Instro Section--}}
        <x-contact-form/>
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
        @endif    </div>
@endsection
