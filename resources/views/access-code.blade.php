@extends('layouts.app')

@section('content')
<div class="px-24" style="background-color: #2C2A2A;">
    <a href="/" class="flex relative z-[100] pt-20 items-center gap-3">
        <img src="{{ asset("images/back-arrow.svg") }}" alt="">
        <p class="text-white font-medium text-xl">Back</p>
    </a>
</div>
    <section class="flex flex-col items-center justify-center min-h-screen" style="background-color: #2C2A2A;">

        <div style="background-color: #343434;" class="text-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <div class="flex justify-center">
                <img class="w-20" src="{{ asset('images/restricted.png') }}">
            </div>
            <h1 class="text-2xl font-semibold text-center mb-4">Restricted Access</h1>
            <p class="text-gray-300 text-center mb-6">This page is restricted. Please enter your access code to proceed.</p>

            <form method="POST" action="{{ route('access-code.submit') }}" class="space-y-4">
                @csrf
                <label class="block text-gray-300 font-medium">Access Code:</label>
                <input type="password" name="access_code" required
                    class="w-full p-2 border border-gray-500 rounded bg-gray-600 text-white focus:outline-none focus:border-gray-400">
                    @error('access_code')
                    <div class="text-red-400 text-sm">{{ $message }}</div>
                @enderror
                <button type="submit"
                    class="w-full mt-4 bg-gray-500 hover:bg-gray-400 text-white font-semibold py-2 rounded focus:outline-none">
                    Submit
                </button>
            </form>
        </div>
    </section>
@endsection
