@extends('layouts.app')
@section('content')
<table class="w-full text-sm text-left ">
    <thead class="text-xs text-[#7B818A] uppercase bg-[#181818]">
        <tr>
            <th scope="col" class="text-[#EEF2F7] px-6 py-3">
            </th>
            <th scope="col" class="text-[#EEF2F7] px-6 py-3">
                #
            </th>
            <th scope="col" class="px-6 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                </svg>
            </th>
            <th scope="col" class="px-6 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </th>
            <th scope="col" class="px-6 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </th>
        </tr>
    </thead>
    <tbody>
        <br>
        @foreach($playlists as $music)
        <tr
            class=" border-[0.3px] transition easy-lin border-[#63686f] h-[40px] my-6 bg-[#181818] text-[#7B818A] hover:text-[#b8bcc0] hover:bg-[#4a4e54]">
            <th class="">
                <center>
                    <div value="{{$music->music}}" class="playbtn border-[0.3px]  border-[#7B818A] rounded-full p-2  w-fit text">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                        </svg>
                    </div>

                </center>
            </th>
            <th scope="row" class="px-6 py-4 flex font-medium whitespace-nowrap">
                <img src="/Musify/Project/storage/app/public/{{$music->CoverImage}}" class="h-[50px] w-[50px]" alt="">
            </th>
            <td scope="col" class="px-6 py-3 font-medium">
                {{$music->title}}
            </td>
            <td scope="col" class="px-6 py-3 font-medium">
                422
            </td>
            <td scope="col" class="px-6 py-3 font-medium">
                {{$music->duration}}
            </td>
            <td scope="col" class="px-6 py-3 font-medium">
                rrrr
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection