@extends('layouts.dashboard')
@section('content')
    <div class="relative overflow-x-auto shadow-md bg-[#181818] sm:rounded-sm mx-4 py-8">
        <a href="/Musify/Project/public/admin/Artist/add"
            class="shadow-md bg-[#373737] rounded-sm my-4 p-2 font-bold text-[#edeff2]">Add Artist</a>
        <table class="w-full text-sm text-left ">
            <thead class="text-xs text-[#7B818A] uppercase bg-[#181818]">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Artist Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date Of birth
                    </th>
                    <th scope="col" class="px-6 py-3">
                        country
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $value)
                    <tr
                        class="border-[0.3px] transition easy-lin border-[#63686f] h-[40px] my-6 bg-[#181818] text-[#7B818A] hover:text-[#b8bcc0] hover:bg-[#4a4e54]">
                        <td class="px-6 py-4">
                            <div class="flex">
                                <img src="/Musify/Project/storage/app/public/{{ $value['image'] }}"
                                    class="h-[50px] w-[50px]" alt="">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $value['name'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value['date_of_birth'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value['country'] }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex mx-auto my-auto justify-between">
                                @if ($value['archive'] == 0)
                                    <a href="/Musify/Project/public/admin/artist/archive/{{ $value['id'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>
                                    </a>
                                @else
                                    <a href="/Musify/Project/public/admin/artist/show/{{ $value['id'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                    </a>
                                @endif

                                <a href="/Musify/Project/public/admin/updateArtist/{{ $value['id'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </a>
                                <a href="/Musify/Project/public/admin/artist/delete/{{ $value['id'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
