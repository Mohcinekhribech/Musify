@props(['artist'])
    <a href="/Musify/Project/public/Artist/{{$artist->id}}" class="w-[200px] h-[250px] bg-[#1d1d1d] hover:bg-[#2c2c2c] transition ease-linear">
    <img class="rounded-full w-40 h-40 p-2 mx-auto" src="/Musify/Project/storage/app/public/{{$artist['image']}}">
    <h3 class="font-medium mx-4 mt-4 text-[#EEF2F7] text-lg">{{$artist['name']}}</h3>
    <h4 class="font-medium mx-4 text-[#d3d7dc] text-sm">Artist</h4>
    </a>

