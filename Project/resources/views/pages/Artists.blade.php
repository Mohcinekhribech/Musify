@extends('layouts.app')
@section('content')
        <div class="w-full">
            <input id="name" type="text" class="flex justify-center mx-auto md:w-1/3 appearance-none my-4 rounded-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm " name="SearchArtist" autocomplete="name" placeholder="Search ..." autofocus>
        <div class="my-6 mx-4 display">
          @foreach ($artists as $value) 
            <x-artist-card :artist="$value" />
          @endforeach
        </div>
        </div>
@endsection
    <style>
        .display {
      display: grid;
      grid-gap: 5px;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
      /* width */
    ::-webkit-scrollbar {
      width: 4px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
      background: #e0f2fe;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #474747;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #6d6d6d;
    }
    </style>