@props(['music', 'playlists', 'user'])
<div class="w-[200px] h-[250px] bg-[#1d1d1d] hover:bg-[#2c2c2c] transition ease-linear">
    <a href="/Musify/Project/public/music/{{ $music->id }}">
        <img class=" w-40 h-40 p-2 mx-auto" src="/Musify/Project/storage/app/public/{{ $music['CoverImage'] }}">
    </a>
    <div class="flex justify-between">
        <h3 class="font-medium mx-4 text-[#EEF2F7] text-lg">{{ $music['title'] }}</h3>
        @if (App\Http\Controllers\LikeController::check($music->id))
            <a onclick="removeLike({{ $user[0]->like[0]->id }})">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 mx-4 text-red-400 my-auto">
                    <path
                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                </svg>
            </a>
        @else
            <a href="/Musify/Project/public/addLike/{{ $music->id }}" class="AddToPlaylist">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mx-4 text-[#d3d7dc] my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </a>
        @endif
    </div>
    <div class="flex justify-between my-[4px]">
        <h4 class="font-medium mx-4 text-[#d3d7dc] text-sm">Music</h4>
        <button class="AddToPlaylist">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="addToPlaylist w-6 h-6 mx-4 text-[#d3d7dc] p-[2px] hover:bg-[#1d1d1d]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>

    </div>

    <h4 class=" mx-4 text-[#d3d7dc] text-xs">{{ $music->artist->name }}</h4>
    <div class="fixed w-full h-100 inset-0 z-50  flex justify-center items-center hidden"
        style="background: rgba(0,0,0,.7);">
        <div
            class="border border-teal-500 shadow-lg modal-container bg-[#2c2c2c] w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto ">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-[#d3d7dc]">Add to Playlist</p>
                    <div class="modal-close cursor-pointer z-50 text-[#d3d7dc]">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <div class="flex flex-col">
                    @foreach ($playlists as $playlist)
                        <button onclick="addToPlaylist({{ $playlist->id }},{{ $music->id }})"
                            class="p-2 hover:bg-[#1d1d1d] w-full rounded-md text-[#EEF2F7]">-
                            {{ $playlist->playlisName }}</button>
                    @endforeach
                </div>

                <!--Footer-->
            </div>
        </div>
    </div>
</div>
<script>
    for (var i = 0; i < document.querySelectorAll('.AddToPlaylist').length; i++) {
        document.querySelectorAll('.AddToPlaylist')[i].addEventListener('click', function(e) {
            console.log(e.target.parentElement.parentElement.parentElement.children[4])
            // var element = 
            e.target.parentElement.parentElement.parentElement.children[4].classList.remove('hidden')
        })
    }
    for (var i = 0; i < document.querySelectorAll('.modal-close').length; i++) {
        document.querySelectorAll('.modal-close ')[i].addEventListener('click', function(e) {
            e.target.parentElement.parentElement.parentElement.parentElement.parentElement.classList.add(
                'hidden')
        })
    }
</script>
