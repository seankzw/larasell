@props(['tagsCsv'])
{{-- CSV -> Comma Separated Value --}}
@php
    $tags = explode(',', $tagsCsv); //Split the string by "," and store in $tags

@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py0 px-3 mr-2 text-xs"
    >
    <a href="/?tag={{$tag}}"> {{$tag}} </a>
    </li>
    @endforeach
</ul>