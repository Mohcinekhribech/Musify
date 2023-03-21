@extends('layouts.app')
@section('content')
        <div class="w-full">
                <div class="relative bg-[url('/Musify/Project/storage/app/public/{{$music->CoverImage}}')] h-[40vh] bg-cover mx-4">
                    <div class="absolute w-full h-[100px] bottom-0 bg-gradient-to-t from-[#181818] left-0"></div>
                    <div class="backdrop-brightness-[60%] h-full w-full">
                        <h2 class="font-bold text-[#EEF2F7] text-3xl pt-6 pl-8">{{$music->title}}</h2>
                        <h3 class="font-bold text-[#EEF2F7] text-xl pt-4 pl-8">Artist Name</h3>
                        <h4 class="font-bold text-[#EEF2F7] text-lg pt-2 pl-8">413 Listen</h4>
                        <div value="/Musify/Project/storage/app/public/{{$music->Music}}" class="playbtn fa-solid fa-play border-[0.3px]  border-[#EEF2F7] mt-4 ml-12 rounded-full w-fit p-4 text-[#EEF2F7]">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-[80%] rounded-lg bg-[#333333] py-2 mx-auto my-4">
                           <h5 class="font-medium text-lg text-[#EEF2F7] text-center my-auto">Comments</h5>
                           
                    </div>
                    <div class="w-[80%] relative rounded-lg bg-[#333333] h-[80vh] mb-14 p-2 mx-auto my-4">
                        <div  class="w-full h-[70vh] p-4 overflow-auto">
                            @foreach($music->comments as $comment)
                            <div class="bg-black p-2 w-fit m-4 rounded-md">
                                <p class="bg-[#333333] text-white w-fit rounded-md p-2 text-sm ">
                                   {{$comment->user->name}}
                                </p>
                                <p class="text-white text-md pt-2 pl-2">
                                {{$comment->comment}}
                                </p>
                            </div>
                            
                            @endforeach
                        </div>
                        <div class="flex absolute bottom-[-18px] w-full">
                            <form class="w-full" action="/Musify/Project/public/comment/store/{{$music->id}}" method="POST">
                                @csrf
                            <div class="flex justify-center w-full mx-auto">
                                <input id="name" type="text" class="w-[70%] appearance-none my-4 rounded-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm " name="comment" autocomplete="name" placeholder="Search ..." autofocus>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-[#EEF2F7] bg-black p-2 rounded-lg my-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                              </svg>
                                </button>
                                
                            </div>
                            </form>
                            
                              
                        </div>
                        
                 </div>
                </div>
        </div>
@endsection
<style>

</style>