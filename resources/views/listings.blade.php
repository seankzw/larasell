@extends('layout')

@section('content')
@include('partials._hero')
@include ('partials._search')

<div class="bg-gray-50 border border-gray-200 rounded p-6">

@if(count($listings) == 0)
  <p>No listings found</p>
@endif

@unless(count($listings) == 0)
@foreach($listings as $listing)
  <div class="flex">
      <img
          class="hidden w-25 mr-6 md:block"
          src="{{asset('images/no-image.png')}}"
          alt=""
      />
      <div>
          <h4 class="text-2xl">
              <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
          </h4>
          <div class="text-xl font-bold mb-3">{{$listing->company}}</div>

          {{-- Tags --}}
          <ul class="flex">
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py0 px-3 mr-2 text-xs"
              >
                  <a href="#">Laravel</a>
              </li>
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py0 px-3 mr-2 text-xs"
              >
                  <a href="#">API</a>
              </li>
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py0 px-3 mr-2 text-xs"
              >
                  <a href="#">Backend</a>
              </li>
              <li
                  class="flex items-center justify-center bg-black text-white rounded-xl py0 px-3 mr-2 text-xs"
              >
                  <a href="#">Vue</a>
              </li>
          </ul>
          <div class="text-lg mt-3">
              <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
          </div>
      </div>
  </div>
@endforeach

@else
  <p>No listings found</p>
@endunless

</div>
@endsection