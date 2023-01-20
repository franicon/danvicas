@extends('layouts.public-layout')
@section('content')
    <x-banner/>
    <div class="tw-max-w-7xl mx-auto">
{{--        Instro Section--}}
        <x-intro-card/>
        <x-recent-project/>
        <x-services/>
    </div>
@endsection
