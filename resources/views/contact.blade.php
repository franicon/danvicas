@extends('layouts.public-layout')
@section('content')
    <x-small-banner>
        <x-slot:head>
            <div class="tw-text-6xl  ">Contact Us</div>
        </x-slot:head>
    </x-small-banner>
    <div class="tw-max-w-7xl mx-auto tw-my-12">
        {{--        Instro Section--}}
        <x-contact-form/>
    </div>
@endsection
