@extends('layouts.app')

@section('content')
    <div class="flex min-h-full bg-[#181818] items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="card">
                <div class="mt-6 text-center text-3xl font-bold tracking-tight text-[#7B818A]">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 text-[#7B818A] col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 text-[#7B818A] col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 text-[#7B818A] col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 text-[#7B818A] col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="relative block w-full appearance-none rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-[#5f6164] py-2 px-4 text-sm font-medium text-white hover:bg-[#2f2f2f] focus:outline-none focus:ring-2 focus:ring-[#EEF2F7] focus:ring-offset-2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
