@props(['playlist'])
<a href="/Musify/Project/public/playlists/{{$playlist->id}}" class="w-[200px] h-[250px] bg-[#1d1d1d] hover:bg-[#2c2c2c] transition ease-linear">
    <img class=" w-40 h-40 p-2 mx-auto" src="/Musify/Project/storage/app/public/{{$playlist->playlisPic}}">
    <h3 class="font-medium mx-4 mt-4 text-[#EEF2F7] text-lg">{{$playlist->playlisName}}</h3>
    <h4 class="font-medium mx-4 text-[#d3d7dc] text-sm">playlist</h4>
</a>