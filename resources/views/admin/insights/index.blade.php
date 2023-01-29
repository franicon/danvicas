@extends('layouts.admin-layout')
@section('content')
    <div class=" mx-auto">
        <section class="container tw-py-10">
            <div class="row justify-content-center g-3 mt-5" method="POST" action="/admin/insights" enctype="multipart/form-data">
                <div class="col-12">
                    <h3 class="tw-font-bold">Publish New Insight</h3>
                </div>
                <hr>
                <div class="col-md-2">
                    <div class="tw-text-xl tw-mb-6 tw-font-bold">Links</div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/insights') ? 'py-2 tw-font-semibold tw-text-[17px] tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}" href="">All Insights</a>
                    </div>
                    <div class="tw-pb-3">
                        <a  class="{{request()->is('admin/insights/create') ? 'tw-font-semibold tw-text-[17px] py-2 tw-no-underline' : 'tw-no-underline tw-text-[17px] tw-text-stone-800'}}"
                            href="/admin/insights/create">New Insight</a>
                    </div>
                </div>
                <div class="col-md-10 tw-border-[1.5px] tw-rounded-3xl py-4">
                    <div class="px-3">
                        <div class="tw-text-xl mb-4">
                           All Insights
                        </div>
                    </div>
                    <div class="row">
                        @foreach($insights as $insight)
                            <div class="col-6 col-xl-4 col-md-6">
                                <div class="tw-border tw-rounded-xl tw-my-3 tw-mx-2">
                                    <div class="tw-p-3">
                                        <div class="tw-flex tw-justify-between">
                                            <div class="tw-text-gray-500 mb-3 tw-bg-green-200 tw-text-green-900
                                        tw-font-black tw-w-10 text-center tw-rounded-xl tw-text-[12px] tw-py-1">live</div>
                                            <form method="POST" action="/admin/insights/{{$insight->id}}" class="">
                                                @csrf
                                                @method('DELETE')
                                                <button class="mb-3 tw-bg-red-300 tw-text-green-100 hover:tw-bg-red-600
                                        tw-font-bold tw-w-16 text-center tw-rounded-xl tw-text-[12px] tw-py-1 tw-cursor-pointer">Delete</button>
                                            </form>
                                        </div>
                                        <div class="tw-text-md">{{$insight->title}}</div>
                                        <div class="tw-flex tw-justify-between">
                                            <div class="pt-2">
                                                <a href="/insight/{{$insight->slug}}" class="tw-no-underline">view</a>
                                            </div>
                                            <div class="pt-2">
                                                <a href="/admin/insights/{{$insight->id}}/edit" class="tw-no-underline">edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="">{{$insights->links()}}</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
