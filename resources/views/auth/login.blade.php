@extends('layouts.root')
@section('title', 'Desa')
@section('content')
    <div class="flex-grow bg-gray-50 relative flex flex-col">
        <div class="flex-grow flex flex-col">
            <div class="flex flex-col flex-grow items-center justify-center">
                <div
                    class="fi-simple-main my-16 w-full bg-white px-6 py-12 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 sm:rounded-xl sm:px-12 max-w-lg">
                    <header class="fi-simple-header flex flex-col items-center">
                        <div
                            class="fi-logo flex text-xl font-bold leading-5 tracking-tight text-gray-950 dark:text-white mb-4">
                            Desa
                        </div>

                        <h1
                            class="fi-simple-header-heading text-center text-2xl font-bold tracking-tight text-gray-950 dark:text-white">
                            Sign in
                        </h1>

                        <p class="fi-simple-header-subheading mt-2 text-center text-sm text-gray-500 dark:text-gray-400">
                            or
                            <a href="/app/register"
                                class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                <span
                                    class="font-semibold text-sm text-custom-600 dark:text-custom-400 group-hover/link:underline group-focus-visible/link:underline"
                                    style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                    sign up for an account
                                </span>
                            </a>
                        </p>
                    </header>

                    <form method="POST" action="{{ route('session-login') }}" class="flex flex-col gap-y-6">
                        @csrf
                        <div class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="data.email">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Email address
                                            <sup class="text-red-600 dark:text-red-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 focus-within:ring-2  {{ $errors->has('email') ? 'ring-red-500' : 'ring-gray-950/10' }} dark:ring-white/20 focus-within:ring-[#4b5563] dark:focus-within:ring-[#4b5563] fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="focus-visible:ring fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3  "
                                                autocomplete="on" autofocus="autofocus" id="email" required="required"
                                                type="email" wire:model="email" tabindex="1" name="email"
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    @error('email')
                                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-y-2">
                            <div class="flex items-center gap-x-3 justify-between">
                                <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="data.password">
                                    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                        Password
                                        <sup class="text-red-600 dark:text-red-400 font-medium">*</sup>
                                    </span>
                                </label>
                                <div class="fi-fo-field-wrp-hint flex items-center gap-x-3 text-sm">
                                </div>
                            </div>
                            <div class="grid auto-cols-fr gap-y-2">
                                <div class="relative fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 focus-within:ring-[#4b5563] dark:focus-within:ring-[#4b5563] fi-fo-text-input overflow-hidden"
                                    x-data="{ isPasswordRevealed: false }">
                                    <div class="fi-input-wrp-input min-w-0 flex-1">
                                        <input
                                            class="focus-visible:ring fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3 [&amp;::-ms-reveal]:hidden"
                                            autocomplete="current-password" type="password" id="password" name="password"
                                            required tabindex="2">
                                    </div>
                                    <div
                                        class="fi-input-wrp-suffix w-12 flex items-center gap-x-3 pe-3 border-s border-gray-200 ps-3 dark:border-white/10">
                                        <div class="flex items-center gap-3">
                                            <button type="button"
                                                class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-500"
                                                onclick="togglePasswordVisibility()">
                                                <svg id="open-eye-icon" xmlns="http://www.w3.org/2000/svg" width="25"
                                                    height="25" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="64" fill="#a1a1aa"></circle>
                                                    <path fill="#a1a1aa"
                                                        d="M490.84 238.6c-26.46-40.92-60.79-75.68-99.27-100.53C349 110.55 302 96 255.66 96c-42.52 0-84.33 12.15-124.27 36.11c-40.73 24.43-77.63 60.12-109.68 106.07a31.92 31.92 0 0 0-.64 35.54c26.41 41.33 60.4 76.14 98.28 100.65C162 402 207.9 416 255.66 416c46.71 0 93.81-14.43 136.2-41.72c38.46-24.77 72.72-59.66 99.08-100.92a32.2 32.2 0 0 0-.1-34.76M256 352a96 96 0 1 1 96-96a96.11 96.11 0 0 1-96 96">
                                                    </path>
                                                </svg>
                                                <svg id="closed-eye-icon" xmlns="http://www.w3.org/2000/svg" width="25"
                                                    height="25" viewBox="0 0 512 512" class="hidden">
                                                    <path fill="#a1a1aa"
                                                        d="M432 448a15.92 15.92 0 0 1-11.31-4.69l-352-352a16 16 0 0 1 22.62-22.62l352 352A16 16 0 0 1 432 448M248 315.85l-51.79-51.79a2 2 0 0 0-3.39 1.69a64.11 64.11 0 0 0 53.49 53.49a2 2 0 0 0 1.69-3.39m16-119.7L315.87 248a2 2 0 0 0 3.4-1.69a64.13 64.13 0 0 0-53.55-53.55a2 2 0 0 0-1.72 3.39" />
                                                    <path fill="#a1a1aa"
                                                        d="M491 273.36a32.2 32.2 0 0 0-.1-34.76c-26.46-40.92-60.79-75.68-99.27-100.53C349 110.55 302 96 255.68 96a226.5 226.5 0 0 0-71.82 11.79a4 4 0 0 0-1.56 6.63l47.24 47.24a4 4 0 0 0 3.82 1.05a96 96 0 0 1 116 116a4 4 0 0 0 1.05 3.81l67.95 68a4 4 0 0 0 5.4.24a343.8 343.8 0 0 0 67.24-77.4M256 352a96 96 0 0 1-93.3-118.63a4 4 0 0 0-1.05-3.81l-66.84-66.87a4 4 0 0 0-5.41-.23c-24.39 20.81-47 46.13-67.67 75.72a31.92 31.92 0 0 0-.64 35.54c26.41 41.33 60.39 76.14 98.28 100.65C162.06 402 207.92 416 255.68 416a238.2 238.2 0 0 0 72.64-11.55a4 4 0 0 0 1.61-6.64l-47.47-47.46a4 4 0 0 0-3.81-1.05A96 96 0 0 1 256 352" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-[#4b5563] text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const openEyeIcon = document.getElementById('open-eye-icon');
            const closedEyeIcon = document.getElementById('closed-eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                openEyeIcon.classList.add('hidden');
                closedEyeIcon.classList.remove('hidden');
            } else {
                passwordField.type = 'password';
                openEyeIcon.classList.remove('hidden');
                closedEyeIcon.classList.add('hidden');
            }
        }
    </script>
@endsection
