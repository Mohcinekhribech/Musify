
<div class="flex min-h-full bg-[#181818] items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-[#7B818A]">Sign in to your account</h2>
      </div>
      <form method="POST" action="/Musify/Project/public/authentification">
        @csrf
        <div class="row mb-3">
            <label for="email" class="col-md-4 text-[#7B818A] col-form-label text-md-end">'Email Address'</label>
    
            <div class="col-md-6">
                <input id="email" type="email" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                @error('email')
                    <span class="font-light text-sm text-red-500 " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="row mb-3">
            <label for="password" class="text-[#7B818A] col-md-4 col-form-label text-md-end">'Password'</label>
    
            <div class="col-md-6">
                <input id="password" type="password" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>    
        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                    <label class="text-[#7B818A]" for="remember">
                        Remember Me
                    </label>
                </div>
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
                    Login
                  </button>
            </div>
        </div>
    </form>
    </div>
  </div>

