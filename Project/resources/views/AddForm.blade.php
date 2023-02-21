<div class="flex min-h-full bg-[#181818] items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-[#7B818A]">Sign in to your account</h2>
      </div>
      <form method="POST" action="">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
            <label class="">
              <span class="text-sm text-[#7B818A]">Music Cover</span>
              <input type="file" name="productPic" required class="block my-4 text-sm text-sky-700
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-sky-50 file:text-sky-700
                hover:file:bg-sky-100
              "/>
            </label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
            <label class="">
              <span class="text-sm text-[#7B818A]">Music</span>
              <input type="file" name="productPic" required class="block my-4 text-sm text-sky-700
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-sky-50 file:text-sky-700
                hover:file:bg-sky-100
              "/>
            </label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input  type="text" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm " name="Text"  required placeholder="Title " autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input  type="text" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm " name="Text"  required placeholder="Writer" autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input  type="text" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm " name="Text"  required placeholder="language" autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <textarea name="" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#3b3c3f] focus:z-10  focus:outline-none sm:text-sm h-[100px]">Lyrics
                </textarea>
                
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-[#5f6164] py-2 px-4 text-sm font-medium text-white hover:bg-[#2f2f2f] focus:outline-none focus:ring-2 focus:ring-[#EEF2F7] focus:ring-offset-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                      <!-- Heroicon name: mini/lock-closed -->
                      <svg class="h-5 w-5 text-[#EEF2F7] group-hover:text-[#EEF2F7]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                      </svg>
                    </span>
                    {{ __('Login') }}
                  </button>
            </div>
        </div>
    </form>
    </div>
  </div>