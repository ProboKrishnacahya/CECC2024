@section('title', 'Log in')

<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ url('/images/Brand/Logo CECC.svg') }}" alt="" class="mx-auto my-4 w-16">
            <h1 class="text-3xl uppercase">Chemical Engineering Challenge & Competition 2024</h1>
            <p class="italic">"The Inclusion of Gen-Z in Science & Industry for Circular Economy World"</p>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="relative">
                <input type="email" id="email"
                    class="peer block w-full appearance-none rounded-t-lg border-0 border-b-2 border-gray-300 bg-gray-50 px-2.5 pb-2.5 pt-5 text-sm text-gray-900 focus:border-custom-ube focus:outline-none focus:ring-0 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-custom-ube"
                    name="email" :value="old('email')" placeholder="" required />
                <label for="email"
                    class="absolute start-2.5 top-4 z-10 origin-[0] -translate-y-4 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-custom-ube rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-custom-ube">Email</label>
            </div>

            <div class="relative">
                <input type="password" id="password"
                    class="peer block w-full appearance-none rounded-b-lg border-0 border-b-2 border-gray-300 bg-gray-50 px-2.5 pb-2.5 pt-5 text-sm text-gray-900 focus:border-custom-ube focus:outline-none focus:ring-0 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-custom-ube"
                    name="password" :value="old('password')" placeholder="" required />
                <label for="password"
                    class="absolute start-2.5 top-4 z-10 origin-[0] -translate-y-4 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-custom-ube rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 dark:text-gray-400 peer-focus:dark:text-custom-ube">Password</label>
            </div>

            <div class="my-3 flex justify-between">
                <div class="flex items-center gap-2">
                    <x-checkbox id="remember_me" name="remember"
                        class="checked:bg-custom-ube focus:ring focus:ring-custom-ube focus:ring-opacity-50" />
                    <label for="remember_me" class="cursor-pointer">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
            </div>

            <x-button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                        clip-rule="evenodd" />
                </svg>
                {{ __('Log in') }}
            </x-button>
        </form>
    </x-authentication-card>
</x-guest-layout>
