@extends('layouts.app')
@section('content')
        <div class="w-full">
            <input id="name" type="text" class="flex justify-center mx-auto md:w-1/3 appearance-none my-4 rounded-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm " name="SearchArtist" autocomplete="name" placeholder="Search ..." autofocus>
            <div class="my-6 mx-4 display">
              @foreach($musics as $music)
                <x-music-card :music="$music" :playlists="$playlists"/>
              @endforeach
        </div>
@endsection
