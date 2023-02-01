@props(['testimonial'])

<div class="md:tw-my-14 tw-my-8 tw-mx-0 md:tw-mx-10 ">
    <div class="text-center">
        <img src="/storage/{{$testimonial->image}}" alt="" class=" mx-auto mb-3">
        <div class="">{{$testimonial->name}}</div>
        <div class="tw-accent-gray-600 md:tw-text-xl tw-text-[16px] tw-italic ">
            “{{$testimonial->body}}”
        </div>
    </div>
</div>
