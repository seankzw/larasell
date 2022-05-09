@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-25 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h4 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h4>
            <div class="text-xl font-bold mb-3">{{ $listing->company }}</div>

            <x-listing-tags :tagsCsv="$listing->tags" />
            {{-- Tags --}}
            <div class="text-lg mt-3">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
