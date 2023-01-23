@extends('layouts.public-layout')
@section('content')
    <x-small-banner>
        <x-slot:head>
            <div class="md:tw-text-6xl tw-text-4xl">About Us</div>
        </x-slot:head>
    </x-small-banner>
    <div class="tw-max-w-7xl mx-auto tw-space-y-16 tw-mt-10">
        <div class="d-card service">
            <div class="d-card-text">
                <div class="md:tw-text-3xl tw-text-xl tw-font-black tw-pb-6">COMPANY HISTORY</div>
                <div class="d-card-main-text">
                    <b>Danvicas Nig. Ltd,</b> began under the registered trade name Esteem Renovate & Paint Tech.,
                    in 2008, incorporated under the laws of Federal Republic of Nigeria.  Over the years,
                    the group has undertaken projects and accumulated skills, know-how and experiences
                    in construction solution, project management services, building trades and related
                    engineering works. However, for purpose of reason(s) the company was rebranded to
                    <b>DANVICAS NIG. LTD,</b> which was incorporated in Oct., 2020.
                </div>
                <div class="mt-3 tw-font-semibold">
                    To this end, the Company is geared to integrate other matters to the success of a good business. Such as:
                    <div class="mt-3">
                        <ul class="tw-space-y-2">
                            <li> Safety of Employees and the Public </li>
                            <li> Conductive Business Environment </li>
                            <li> Effective Management Techniques </li>
                            <li> Complete Commitment to Quality </li>
                            <li> Competitive Pricing </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="">
                <img src="img/about-intro.png" alt="" class="d-card-img">
            </div>
        </div>
        <div class="d-card service">
            <div class="d-card-text">
                <div class="md:tw-text-3xl tw-text-xl tw-font-black tw-pb-6">WE ARE 25 YEARS IN INDUSTRY</div>
                <div class="d-card-main-text">
                    These qualities above positioned DANVICAS NIG. LTD., to go above and beyond on every project,
                    and delivered on our promises with integrity. The firm’s optimal approach to meeting client’s
                    satisfactions is out of wide range of experience built up over the years in numerous construction
                    and design services, rendered to individuals, industries, corporate bodies, and government organizations.
                    Our outfit is well equipped to handle any aspect of Building and Civil project(s) from designing to
                    commissioning and has gained appreciable relationship with related partners within and Nigeria.
                </div>
            </div>
            <div class="">
                <img src="img/building-construction.jpg" alt="" class="d-card-img">
            </div>
        </div>
        <div class="tw-grid tw-gap-10 tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-2 tw-mt-20 text-center">
            <div class="tw-my-12 md:tw-px-10 tw-px-3">
                <div class="service-card tw-border-b-blue-600 tw-shadow-xl">
                    <img src="/img/vector.png" alt="" class="tw-w-20 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-3xl tw-text-xl tw-font-bold">OUR VALUES</h1>
                    <p class="md:tw-text-[16px] tw-text-[14px] ">
                        Deliver excellence. Act with Integrity. Work ethically. Work Together.
                        Embrace Change. Make a Difference. Be Open.
                    </p>
                </div>
            </div>
            <div class="tw-my-12 md:tw-px-10 tw-px-3">
                <div class="service-card tw-border-b-white">
                    <img src="/img/vector.png" alt="" class="tw-w-20 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-3xl tw-text-xl tw-font-bold">OUR MISSION</h1>
                    <p class="md:tw-text-[16px] tw-text-[14px] ">
                        Deliver services twice more than our client would desire and expect, in time and tune with evolving technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
