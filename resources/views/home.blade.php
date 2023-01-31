@extends('layouts.public-layout')
@section('content')
    <x-home-banner/>
    <div class="tw-max-w-7xl mx-auto">
{{--        Instro Section--}}
        <x-intro-card/>
        <section>
            <div class="tw-py-36 px-3">
                <div class="tw-max-w-3xl mx-auto text-center">
                    <div class="c-header tw-font-black"> RECENT PROJECT</div>
                    <div class="c-border mx-auto"></div>
                    <div class="md:tw-text-xl tw-text-[15px] tw-text-gray-500">
                        We have work on numerous kind of projects from Building to construction, design and projects managements. here are f
                    </div>
                    <div class="btn btn-primary px-4 py-2 tw-font-black mt-4">See all Project</div>
                </div>
                <div class="tw-grid tw-gap-4 lg:tw-grid-cols-3 md:tw-grid-cols-2 sm:tw-grid-cols-2  tw-my-20">
                    @foreach($projects->take(3) as $project)
                        <div class="tw-relative overflow-hidden tw-cursor-pointer tw-shadow-xl tw-rounded-3xl">
                            <div style="background-image: url('/storage/{{$project->thumbnail}}'); background-position: center; background-size: cover; height: 500px;" class="md:tw-max-h-96 tw-max-h-60"></div>
                            <div class="project-overlay">
                                <div class="tw-w-full tw-flex tw-flex-col tw-items-center tw-justify-center">
                                    <p class="md:tw-text-xl tw-text-[15px]">{{$project->category}}</p>
                                    <div class="tw-cursor-pointer">
                                        <a href="/projects/{{$project->id}}"><img src="/img/download.svg" alt="" class="tw-w-10 tw-fill-amber-50"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <x-services-card/>
        @if($insights->count())
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
                                        <div class="tw-py-2 tw-text-justify">{{ substr(strip_tags($insight->first_body), 0, 150) }}... </div>
                                        <div class="pt-2">
                                            <a href="/insight/{{$insight->slug}}" class="tw-no-underline">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    @endif
                </div>
            </article>
        </div>
        @endif
        <x-testimonials/>
    </div>
@endsection
