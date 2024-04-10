@extends('layouts.app')

@section('content')
    @include('includes.navbar')
    <div class="flex flex-col h-screen w-full text-lg items-center justify-center">
        <div class="text-4xl font-bold">Welcome back</div>
        <p class="text-base text-gray-700 font-light">Log in to your account</p>

        <div class="w-[400px] px-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">

                    <div class="w-full">
                        <input id="email" type="email" placeholder="Email"
                            class="border border-gray-200 rounded-lg focus:border-2 focus:border-gray-300  text-lgfont-light mt-4 w-full p-3 outline-none"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="text-red-600 text-base font-light" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-6">
                        <input id="password" placeholder="Password" type="password"
                            class="border border-gray-200 rounded-lg focus:border-2 focus:border-gray-300  text-lgfont-light mt-4 w-full p-3 outline-none"
                            name="password" required autocomplete="current-password">

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
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit"
                            class="border rounded-lg bg-[#2C2A2A] hover:bg-gray-800 text-white cursor-pointer  text-lgfont-light mt-4 w-full p-3 outline-none">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
