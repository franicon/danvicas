@extends('layouts.admin-layout')
@section('content')
    <div class="tw-max-w-7xl mx-auto">
        <div class="tw-grid tw-gap-0 tw-grid-cols-1 tw-my-20 text-center">
            <div class="tw-border tw-my-6 md:tw-px-10 tw-px-3">Hello!, Welcome Back</div>
        </div>
        <div class="tw-grid tw-gap-0 tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-my-20 text-center">
            <div class="tw-my-6 md:tw-px-10 tw-px-3">
                <div class="service-card-2 tw-border-[1.5px]">
                    <img src="/img/vector.png" alt="" class="tw-w-16 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-2xl tw-text-xl tw-font-bold tw-text-blue-900">SERVICES</h1>
                    <p class="md:tw-text-[16px] tw-text-[14px] ">
                        Add,Update, Delete to services.
                    </p>
                    <a href="" class="btn btn-outline-primary">Edit Services</a>
                </div>
            </div>
            <div class="tw-my-6 md:tw-px-10 tw-px-3">
                <div class="service-card-2 tw-border-[1.5px]">
                    <img src="/img/vector.png" alt="" class="tw-w-16 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-2xl tw-text-xl tw-font-bold tw-text-blue-900">PROJECTS</h1>
                    <p class="md:tw-text-[16px] tw-text-[14px] ">
                        Add,Update, Delete to Projects.
                    </p>
                    <a href="" class="btn btn-outline-primary">Edit Projects</a>
                </div>
            </div>
            <div class=" md:tw-px-10 tw-my-6 tw-px-3">
                <div class="service-card-2 tw-border-[1.5px]">
                    <img src="/img/vector.png" alt="" class="tw-w-16 mx-auto tw-mb-4">
                    <h1 class="md:tw-text-2xl tw-text-xl tw-font-bold tw-text-blue-900">INSIGHTS</h1>
                    <p class="md:tw-text-[16px] tw-text-[14px] ">
                        Add,Update, Delete to Insights.
                    </p>
                    <a href="admin/insights/create" class="btn btn-outline-primary">Edit Insights</a>
                </div>
            </div>
        </div>
    </div>
@endsection

