@extends('layouts.public-layout')
@section('content')
    <x-home-banner/>
    <div class="tw-max-w-7xl mx-auto">
{{--        Instro Section--}}
        <x-intro-card/>
        <x-recent-project/>
        <x-services-card/>
        <div class="tw-max-w-7xl mx-auto">
            <article class="tw-mb-24 px-3">
                <div class="tw-max-w-3xl mx-auto text-center">
                    <div class="c-header tw-font-black"> Our Insights</div>
                    <div class="c-border mx-auto"></div>
                    <div class="md:tw-text-xl tw-text-[15px] tw-text-gray-500">
                        Get the most from out insights to know the latest updates.
                    </div>
                </div>
                <div class="tw-grid tw-gap-4 lg:tw-grid-cols-3 md:tw-grid-cols-2 tw-grid-cols-1 tw-my-20">
                    @if($insights->count())
                            @foreach($insights->take(3) as $insight)
                                <div class="tw-bg-white hover:tw-shadow-xl tw-transition-all tw-cursor-pointer tw-my-5">
                                    <div class="tw-max-w-full tw-rounded-t-3xl"
                                         style="background-image:url('/storage/{{$insight->thumbnail}}'); background-size: cover; height: 250px;"></div>
                                    <div class="tw-py-6 md:tw-px-3 tw-px-3">
                                        <div class="tw-text-gray-500 mb-3">Published {{ $insight->created_at->diffForHumans() }}</div>
                                        <div class="tw-text-xl">{{$insight->title}}</div>
                                        <div class="tw-py-2 tw-text-justify">{{$insight->first_body}}</div>
                                        <div class="pt-2">
                                            <a href="/insight/{{$insight->slug}}" class="tw-no-underline">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    @endif
                </div>
               @if($insights->count() < 1)
                    <div class="tw-max-w-full mx-auto text-center">
                        <div class="tw-text-2xl tw-font-bold">No Insights yet. Please checkout back Later</div>
                    </div>
                @endif
            </article>
        </div>
        <x-testimonials/>
    </div>
@endsection
