<footer class="bg-gray-100 text-gray-700">
    <div class="container mx-auto grid grid-cols-1 gap-8 px-4 py-8 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <div class="mb-4 w-fit">
                <x-logo />
            </div>
            <h3 class="mb-4 text-lg font-semibold">À propos</h3>
            <p>Tsikonina est une application dédiée aux passionnés de cuisine, permettant d'explorer, partager et créer
                des recettes.</p>

        </div>
        <div>
            <h3 class="mb-4 text-lg font-semibold">Navigation</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('index') }}" class="hover:underline">Accueil</a></li>
                <li><a href="{{ route('explore') }}" class="hover:underline">Explorer</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">À propos</a></li>
            </ul>
        </div>
        <div>
            <h3 class="mb-4 text-lg font-semibold">Liens utiles</h3>
            <ul class="space-y-2">
                @guest

                    <li><a href="{{ route('login') }}" class="hover:underline">Connexion</a></li>
                    <li><a href="{{ route('register') }}" class="hover:underline">Créer un compte</a></li>
                @endguest
                @auth
                    <li><a href="{{ route('profile', auth()->user()->id) }}" class="hover:underline">Profil</a></li>
                    <li><a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a></li>
                    <li><a href="{{ route('recipes.create') }}" class="hover:underline">Ajouter</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="hover:underline">Déconnexion</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto text-center">
                <h3 class="mb-4 text-left text-lg font-semibold">Envoyez-nous un message</h3>
                <form class="w-full space-y-8" method="POST" action="{{ route('message') }}">
                    @csrf
                    <div class="group relative z-0 mb-5">
                        <input type="text" name="name" id="name"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseOrange-light/30 bg-transparent px-0 py-2.5 text-sm text-baseBlack focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " required />
                        <label for="name"
                            class="t absolute left-0 top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light">Votre
                            nom</label>
                    </div>
                    @error('name')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5">
                        <input type="email" name="message_sender_mail" id="message_sender_mail"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseOrange-light/30 bg-transparent px-0 py-2.5 text-sm text-baseBlack focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " required />
                        <label for="message_sender_mail"
                            class="absolute left-0 top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light">Votre
                            email</label>
                    </div>
                    @error('message_sender_mail')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5">
                        <textarea name="message" id="message" rows="4"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseOrange-light/30 bg-transparent px-0 py-2.5 text-sm text-baseBlack focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " required></textarea>
                        <label for="message"
                            class="absolute left-0 top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light">Votre
                            message</label>
                    </div>
                    @error('message')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full rounded-lg bg-baseOrange-light px-5 py-2.5 text-center text-sm font-medium text-white transition-all duration-300 hover:bg-baseOrange-dark focus:outline-none">Envoyer
                            le message</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="bg-gray-200 py-4">
        <div class="container mx-auto px-4 text-center font-semibold">
            <p>&copy; {{ date('Y') }} Tsikonina. Tous droits réservés. <br>RASOLOMAMPIONONA Henintsoa Heriniaina
                <br> IGLD 3 N°: 23
            </p>
        </div>
    </div>
</footer>
