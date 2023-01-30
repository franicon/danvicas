@extends('layouts.admin-layout')
@section('content')
    <div class="tw-max-w-7xl mx-auto">
        <div class="tw-grid tw-gap-0 tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-my-16 text-center">
            <div class="tw-my-6 md:tw-px-10 tw-px-3">
                <div class="service-card-2 tw-border-[1.5px]">
                    <img src="/img/customer-support.png" alt="" class="tw-w-16 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-2xl tw-text-xl tw-font-bold tw-text-blue-900">SERVICES</h1>
                    <p class="md:tw-text-[15px] tw-text-[14px] tw-font-semibold">
                        Add, Update, Delete Services.
                    </p>
                    <a href="" class="btn btn-outline-primary">Edit Services</a>
                </div>
            </div>
            <div class="tw-my-6 md:tw-px-10 tw-px-3">
                <div class="service-card-2 tw-border-[1.5px]">
                    <img src="/img/project.png" alt="" class="tw-w-16 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-2xl tw-text-xl tw-font-bold tw-text-blue-900">PROJECTS</h1>
                    <p class="md:tw-text-[15px] tw-text-[14px] tw-font-semibold">
                        Add, Update, Delete Projects.
                    </p>
                    <a href="admin/services" class="btn btn-outline-primary">Edit Projects</a>
                </div>
            </div>
            <div class=" md:tw-px-10 tw-my-6 tw-px-3">
                <div class="service-card-2 tw-border-[1.5px]">
                    <img src="/img/insight.png" alt="" class="tw-w-16 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-2xl tw-text-xl tw-font-bold tw-text-blue-900">INSIGHTS</h1>
                    <p class="md:tw-text-[15px] tw-text-[14px] tw-font-semibold">
                        Add, Update, Delete Insights.
                    </p>
                    <a href="admin/insights" class="btn btn-outline-primary">Edit Insights</a>
                </div>
            </div>
        </div>
    </div>
@endsection

