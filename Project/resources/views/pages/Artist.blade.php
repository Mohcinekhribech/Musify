@extends('layouts.app')
@section('content')
        <div class="w-full">
            <header>
                <div class="bg-[url('/Musify/Project/storage/app/public/{{$artist->image}}')] justify-around flex h-[50vh]  mx-4">
                    <div class="backdrop-brightness-[90%] h-full w-full">
                        <h2 class="font-bold text-[#EEF2F7] text-5xl pt-6 pl-8">{{$artist->name}} </h2>
                        <h3 class="font-bold text-[#EEF2F7] text-3xl pt-4 pl-12">Artist Name</h3>
                        <div class="border-[0.3px]  border-[#EEF2F7] mt-12 ml-12 rounded-full w-fit p-4 text-[#EEF2F7]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>
                        </div>
                    </div>
                    <div class=" h-fit w-fit my-auto mx-auto border border-white mr-6">
                        <img src="/Musify/Project/storage/app/public/{{$artist->image}}" class="h-[200px] w-[200px]" alt="">
                    </div>
                </div>
            </header>
            <div class="relative overflow-x-auto shadow-md bg-[#181818] sm:rounded-sm mx-4">
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
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <br>
                        @foreach($artist->MusicPieace as $music)
                        <tr
                            class=" border-[0.3px] transition easy-lin border-[#63686f] h-[40px] my-6 bg-[#181818] text-[#7B818A] hover:text-[#b8bcc0] hover:bg-[#4a4e54]">
                            <th class="">
                                <center>
                                    <div value="/Musify/Project/storage/app/public/{{$music->Music}}" class="playbtn fa-solid fa-play border-[0.3px]  border-[#7B818A] rounded-full p-2  w-fit text">
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
                                {{$music->duration}}
                            </td>
                            <td scope="col" class="px-6 py-3 font-medium">
                                rrrr
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection

