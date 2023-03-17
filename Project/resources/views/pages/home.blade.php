@extends('layouts.app')
@section('content')
        <div class="w-full mt-2 h-screen overflow-auto">
            <div class="relative bg-[url('background/b2.jpg')] h-[50vh] bg-cover mx-4">
                <div class="absolute w-full h-[100px] bottom-0 bg-gradient-to-t from-[#181818] left-0"></div>
                <div class="backdrop-brightness-[60%] h-full w-full ">
                    <h2 class="font-bold text-[#EEF2F7] text-5xl pt-24 pl-8 text-center ">Welcome To Musify</h2>
                </div>
            </div>
            <div class="mx-4 my-4">
                <div class="flex justify-between mx-4">
                    <h3 class="font-bold text-[#EEF2F7] text-2xl">Artists</h3>
                    <a class="text-[#c2c6ca] text-sm pt-4 pl-8" href="/Musify/Project/public/Artists">Show More -></a>
                </div>
                <div class="my-4 display">
                  @foreach($artists as $artist)
                   <x-artist-card :artist="$artist"/>
                  @endforeach
                </div>
                <div class="flex justify-between mx-4">
                    <h3 class="font-bold text-[#EEF2F7] text-2xl">Musics</h3>
                    <a class="text-[#c2c6ca] text-sm pt-4 pl-8" href="/Musify/Project/public/musics">Show More -></a>
                </div>
                <div class="my-4 display">
                @foreach($musics as $music)
                    <x-music-card :music="$music" :playlists="$playlists" :user="$user"/>
                @endforeach
                </div>
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