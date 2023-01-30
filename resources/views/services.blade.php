@extends('layouts.public-layout')
@section('content')
  <x-small-banner>
      <x-slot:head>
          <div class="md:tw-text-6xl tw-text-4xl">Services</div>
          </x-slot:head>
  </x-small-banner>
  <section class="tw-max-w-7xl mx-auto">
      <section class="tw-pt-24  tw-space-y-10">
          @foreach($services as $service)
              <div class="d-card service">
                  <div class="d-card-text">
                      <div class="tw-text-3xl tw-font-black tw-pb-6">{{strtoupper($service->title)}}</div>
                      <div class="d-card-main-text">
                          {{$service->body}}
                      </div>
                  </div>
                  <div class="">
                      <img src="/storage/{{$service->image}}" alt="" class="d-card-img xl:tw-rounded-3xl tw-shadow-2xl">
                  </div>
              </div>
          @endforeach
      </section>
  </section>
@endsection
