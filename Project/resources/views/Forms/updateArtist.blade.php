<div class="flex min-h-full bg-[#181818] items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-[#7B818A]">Add Music</h2>
        </div>
        <form method="POST" action="/Musify/Project/public/admin/ModifyArtist/{{$artist->id}}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="">
                        <span class="text-sm text-[#a9bbd5]">Artist Avatar</span>
                        <input type="file" name="image" 
                            class="block my-2 text-sm text-[#7B818A]
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-sky-50 file:text-[#7B818A]
                hover:file:bg-sky-100
              " />
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-sm text-[#7B818A]">Artist Name</span>
                    <input type="text"
                        class="relative block w-full appearance-none my-2 rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                        name="name" value="{{$artist->name}}" required placeholder="Name " autofocus>
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-sm text-[#7B818A]">Country</span>
                    <input type="text"
                        class="relative block w-full appearance-none my-2 rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                        name="country" value="{{$artist->country}}" required placeholder="Country" autofocus>
                </div>
                @error('country')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <span class="text-sm text-[#7B818A]">date of birth</span>
                    <input type="date"
                        class="relative block w-full appearance-none my-2 rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                        name="date_of_birth" value="{{$artist->date_of_birth}}" required placeholder="date_of_birth" autofocus>
                </div>
                @error('date_of_birth')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-8 offset-md-4">
                <button type="submit"
                    class="group relative flex w-full justify-center rounded-md border border-transparent bg-[#5f6164] py-2 px-4 text-sm font-medium text-white hover:bg-[#2f2f2f] focus:outline-none focus:ring-2 focus:ring-[#EEF2F7] focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <!-- Heroicon name: mini/lock-closed -->
                        <svg class="h-5 w-5 text-[#EEF2F7] group-hover:text-[#EEF2F7]"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    Add
                </button>
            </div>
        </form>
    </div>
</div>