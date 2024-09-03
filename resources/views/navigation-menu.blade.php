@php
    $routeName = request()->route() ? request()->route()->getName() : '';

    $isHome = Str::startsWith($routeName, 'home');
    $isGuidance = Str::startsWith($routeName, 'guidance');
    $isCompetition = Str::startsWith($routeName, 'competition');
@endphp

<div x-data="{ open: false }">
    <div x-show="open" class="fixed inset-0 z-50 flex md:hidden" role="dialog" aria-modal="true" aria-label="Sidebar">
        <div class="fixed inset-0 bg-black/50" aria-hidden="true"></div>
        <div class="relative flex w-full max-w-fit flex-1 flex-col bg-white/30 text-white backdrop-blur-md">
            <div class="h-0 flex-1 space-y-8 overflow-y-auto p-4">
                <div>
                    <button type="button"
                        class="size-12 ms-auto flex items-center justify-center rounded-md border-2 focus:ring focus:ring-white focus:ring-opacity-50"@click="open = !open">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="size-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="my-4 grid space-y-4">
                    <a href="{{ route('home') }}"
                        class="my-2 flex items-center justify-center gap-3 text-3xl hover:brightness-125">
                        <img src="{{ url('/images/Brand/Logo CECC.svg') }}" alt="" class="w-12">
                        <span>CECC 2024</span>
                    </a>
                    <a href="{{ route('guidance') }}"
                        class="{{ $isGuidance ? 'bg-custom-ube p-2 focus:ring focus:ring-opacity-50 focus:ring-custom-ube' : '' }} rounded-md font-medium hover:brightness-125">Guidance</a>
                    <a href="{{ route('competition') }}"
                        class="{{ $isCompetition ? 'bg-custom-ube p-2 focus:ring focus:ring-opacity-50 focus:ring-custom-ube' : '' }} rounded-md font-medium hover:brightness-125">Competition</a>
                </nav>

                <div class="font-inter font-bold">
                    @guest
                        <div class="absolute inset-x-0 bottom-0 items-center p-4">
                            <a href="{{ route('login') }}">
                                <x-secondary-button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Log in
                                </x-secondary-button>
                            </a>
                        </div>
                    @endguest

                    @auth
                        <div class="absolute inset-x-0 bottom-0 space-y-2 px-4 py-2">
                            <hr class="my-2">

                            <button id="dropdownTopButton" data-dropdown-toggle="dropdownTopMobile"
                                data-dropdown-placement="top" class="inline-flex w-full items-center" type="button">
                                <div class="truncate">
                                    <small>{{ Auth::user()->email }}</small>
                                </div>
                            </button>

                            <div id="dropdownTopMobile" class="z-10 hidden w-full px-4 transition-all">
                                <ul aria-labelledby="dropdownTopButton">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="flex w-full place-content-center gap-2 rounded-md bg-white px-3 py-2 text-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50"
                                                role="menuitem" tabindex="-1" id="user-menu-item-2">
                                                <svg class="size-6 flex-shrink-0 text-red-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                                </svg>
                                                Log out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            <div class="w-14 flex-shrink-0"></div>
        </div>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 -translate-x-full"
        class="z-50 hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
        <div class="fixed inset-0 bg-black/50" aria-hidden="true"></div>
        <div class="flex min-h-0 flex-1 flex-col bg-white/30 text-white backdrop-blur-md">
            <div class="flex flex-1 flex-col overflow-y-auto p-4">
                <div>
                    <button type="button"
                        class="size-12 ms-auto flex items-center justify-center rounded-md border-2 focus:ring focus:ring-white focus:ring-opacity-50"
                        @click="open = !open">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="size-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="my-4 grid space-y-4">
                    <a href="{{ route('home') }}"
                        class="my-2 flex items-center justify-center gap-3 text-3xl hover:brightness-125">
                        <img src="{{ url('/images/Brand/Logo CECC.svg') }}" alt="" class="w-12">
                        <span>CECC 2024</span>
                    </a>
                    <a href="{{ route('guidance') }}"
                        class="{{ $isGuidance ? 'bg-custom-ube p-2 focus:ring focus:ring-opacity-50 focus:ring-custom-ube' : '' }} rounded-md font-medium hover:brightness-125">Guidance</a>
                    <a href="{{ route('competition') }}"
                        class="{{ $isCompetition ? 'bg-custom-ube p-2 focus:ring focus:ring-opacity-50 focus:ring-custom-ube' : '' }} rounded-md font-medium hover:brightness-125">Competition</a>
                </nav>

                <div class="font-inter font-bold">
                    @guest
                        <div class="absolute inset-x-0 bottom-0 items-center p-4">
                            <a href="{{ route('login') }}">
                                <x-secondary-button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path fill-rule="evenodd"
                                            d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Log in
                                </x-secondary-button>
                            </a>
                        </div>
                    @endguest

                    @auth
                        <div class="absolute inset-x-0 bottom-0 space-y-2 px-4 py-2">
                            <hr class="my-2">

                            <button id="dropdownTopButton" data-dropdown-toggle="dropdownTopTabletDesktop"
                                data-dropdown-placement="top" class="inline-flex w-full items-center" type="button">
                                <div class="flex items-center gap-2 truncate">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <small class="line-clamp-1">{{ Auth::user()->email }}</small>
                                    </div>
                                    <svg class="size-2.5 flex-shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </div>
                            </button>

                            <div id="dropdownTopTabletDesktop" class="z-10 hidden w-full px-4 transition-all">
                                <ul aria-labelledby="dropdownTopButton">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="flex w-full place-content-center gap-2 rounded-md bg-white px-3 py-2 text-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50"
                                                role="menuitem" tabindex="-1" id="user-menu-item-2">
                                                <svg class="size-6 flex-shrink-0 text-red-500"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                                </svg>
                                                Log out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <div x-show="!open" class="absolute flex flex-1 flex-col">
        <div class="top-0 z-10 py-4 ps-4">
            <button type="button"
                class="size-12 -ms-0.5 -mt-0.5 inline-flex items-center justify-center rounded-md bg-custom-ube text-white hover:brightness-125 focus:ring focus:ring-custom-ube focus:ring-opacity-50"
                @click="open = !open">
                <span class="sr-only">Open sidebar</span>
                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
