<div id="mobileMenu" class="fixed -right-full top-0 z-50 min-h-screen w-full overflow-y-scroll md:hidden">
    {{-- top --}}
    <div class="flex h-[116px] items-center justify-between border-b-2 border-b-baseGray-light bg-baseWhite px-4">
        <x-logo />
        <span class="cursor-pointer text-baseOrange-light" id="mobileMenuClose">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </span>
    </div>

    <div class="h-screen bg-baseWhite">
        <div class="flex flex-col border-b-2 border-b-baseGray-light px-4 py-8 font-semibold text-baseGray-dark">
            <x-mobilelink label="accueil" link="{{ route('index') }}" />
            <x-mobilelink label="explorer" link="{{ route('explore') }}" />
            <x-mobilelink label="à propos" link="{{ route('about') }}" />
        </div>
        <div class="flex flex-col border-b-2 border-b-baseGray-light px-4 py-8 font-semibold text-baseGray-dark">
            <div id="" class="flex-col justify-center overflow-hidden">
                @guest
                    <x-userlink link="{{ route('login') }}" class="mobilelinkuser" label="connexion">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                    </x-userlink>
                    <x-userlink link="{{ route('register') }}" class="mobilelinkuser" label="inscription">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                    </x-userlink>
                @endguest

                @auth
                    <x-userlink link="{{ route('profile', auth()->user()) }}" class="mobilelinkuser" label="profil">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </x-userlink>
                    <x-userlink link="{{ route('dashboard') }}" class="mobilelinkuser" label="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>

                    </x-userlink>
                    <x-userlink link="{{ route('recipes.create') }}" class="mobilelinkuser" label="Ajouter">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </x-userlink>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="mobilelinkuser w-full">
                            <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                                    stroke="currentColor" class="size-6">
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
    </div>

</div>
