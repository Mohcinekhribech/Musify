@extends('layouts.dashboard')
@section('content')
<div class="relative overflow-x-auto shadow-md bg-[#181818] sm:rounded-sm mx-4 py-8">
    <table class="w-full text-sm text-left ">
        <thead class="text-xs text-[#7B818A] uppercase bg-[#181818]">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Music Name
                </th>
                <th scope="col" class="px-6 py-3">
                    client
                </th>
                <th scope="col" class="px-6 py-3">
                    Comment
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr class="border-[0.3px] transition easy-lin border-[#63686f] h-[40px] my-6 bg-[#181818] text-[#7B818A] hover:text-[#b8bcc0] hover:bg-[#4a4e54]">
                <td class="px-6 py-4">
                    {{$comment->musicpieace->title}}
                </td>
                <td class="px-6 py-4">
                    {{$comment->user->name}}
                </td>
                <td class="px-6 py-4">
                    {{$comment->comment}}
                </td>
                <td class="px-6 py-4">
                    <a href="/Musify/Project/public/admin/comment/delete/{{$comment->id}}" class="mx-auto text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                          </svg>
                          
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
