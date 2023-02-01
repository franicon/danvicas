@props(['testimonial'])
<div class="md:tw-my-6 tw-my-8 tw-mx-0 md:tw-mx-10 ">
    <div class="text-center">
        <div style="background-image: url('/storage/{{$testimonial->image}}'); height: 100px; width: 100px; border-radius: 100%; background-position: center; background-size: cover;" alt="" class=" mx-auto mb-3"> </div>
        <div class="md:tw-text-xl tw-italic tw-font-semibold">{{$testimonial->name}}</div>
        <div class="tw-accent-gray-600 md:tw-text-md tw-text-[16px] tw-italic ">
            “{{$testimonial->body}}”
        </div>
    </div>
</div>
