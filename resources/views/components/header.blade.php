<div class="container mx-auto flex items-center justify-between px-4 py-8">
    <x-logo />

    <div class="hidden items-center justify-center gap-4 font-semibold text-baseGray-dark sm:gap-8 md:flex">
        <x-navlink label="accueil" link="{{ route('index') }}" />
        <x-navlink label="explorer" link="{{ route('explore') }}" />
        <x-navlink label="à propos" link="{{ route('about') }}" />
    </div>

    <div class="flex items-center justify-center gap-2">
        <div class="relative flex justify-end p-4">
            <button id="toggleSearch" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            <form id="searchForm" action="{{ route('explore') }}" method="GET"
                class="absolute -right-9 top-1/2 z-50 hidden -translate-y-1/2 transform">
                @csrf
                <div class="flex h-full w-full items-center justify-center gap-4 rounded-xl bg-baseOrange-light p-3">
                    <div class="ml-3 flex items-center justify-center border-b-2">
                        <input type="text" name="search"
                            class="w-full bg-transparent py-2 pr-4 text-sm text-baseWhite placeholder:text-baseWhite/80 focus:outline-none"
                            placeholder="Rechercher...">
                        <button type="submit" class="p-2 text-baseWhite">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.7" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                    <button id="closeSearch" type="button"
                        class="rounded-lg bg-red-400 p-2 text-baseWhite hover:bg-baseWhite hover:text-baseOrange-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>


        <div class="relative hidden md:block">
            <span id="toggleMenu" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </span>
            <div id="menu"
                class="absolute right-0 top-10 z-10 hidden flex-col justify-center overflow-hidden rounded-xl bg-baseBlack text-baseWhite">
                @guest
                    <x-userlink link="{{ route('login') }}" class="slideLink" label="connexion">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                    </x-userlink>
                    <x-userlink link="{{ route('register') }}" class="slideLink" label="inscription">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                    </x-userlink>
                @endguest
                @auth
                    <x-userlink link="{{ route('profile', auth()->user()) }}" class="slideLink" label="profil">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </x-userlink>

                    <x-userlink link="{{ route('dashboard') }}" class="slideLink" label="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>

                    </x-userlink>

                    <x-userlink link="{{ route('recipes.create') }}" class="slideLink" label="Ajouter">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </x-userlink>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="slideLink">
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.7" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                </svg>
                            </p>
                            <p>Déconnexion</p>
                        </button>
                    </form>
                @endauth
            </div>
        </div>
        <span class="cursor-pointer md:hidden" id="mobileMenuOpen">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
            </svg>
        </span>
    </div>

    <x-mobilemenu />

</div>
