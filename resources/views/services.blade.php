@extends('layouts.public-layout')
@section('content')
  <x-small-banner>
      <x-slot:head>
          <div class="tw-text-6xl  ">Services</div>
          </x-slot:head>
  </x-small-banner>
  <section class="tw-max-w-7xl mx-auto">
      <x-double-card/>
  </section>
@endsection
