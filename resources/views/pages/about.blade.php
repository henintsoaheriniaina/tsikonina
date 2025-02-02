<x-layouts.app title="À propos">
    <div class="min-h-screen bg-hero bg-cover bg-center bg-no-repeat py-40">
        <h1 class="text-center text-4xl font-bold text-baseWhite md:text-5xl">À propos de Tsikonina</h1>
        <div class="flex flex-col items-center justify-center">
            <div class="flex h-full w-full flex-col items-center justify-center bg-opacity-70 py-8 md:py-16">
                <div class="mx-auto max-w-4xl space-y-20 px-4 text-center">
                    <p class="mb-6 text-lg text-baseWhite md:text-xl">Tsikonina est une application qui permet aux
                        passionnés
                        de cuisine d'explorer, partager et créer des recettes. Nous croyons que la cuisine rassemble les
                        gens et crée des souvenirs mémorables. Avec Tsikonina, vous pouvez découvrir de nouvelles
                        recettes,
                        partager vos créations et vous connecter avec d'autres amateurs de cuisine.</p>

                    <h2 class="mb-4 text-3xl font-semibold text-baseOrange-light">Notre Mission</h2>
                    <p class="mb-6 text-lg text-baseWhite md:text-xl">Notre mission est de fournir une plateforme
                        conviviale
                        où les utilisateurs peuvent non seulement explorer des recettes provenant du monde entier, mais
                        aussi créer et partager leurs propres recettes de manière simple et intuitive. Nous encourageons
                        la
                        créativité et la diversité culinaire pour inspirer les autres à cuisiner avec passion.</p>

                    <h2 class="mb-4 text-3xl font-semibold text-baseOrange-light">Rejoignez-nous</h2>
                    <p class="mb-6 text-lg text-baseWhite md:text-xl">Que vous soyez un chef expérimenté ou un amateur
                        passionné, Tsikonina est l'endroit idéal pour découvrir et partager vos recettes préférées.
                        Rejoignez notre communauté et inspirez les autres avec vos créations.</p>

                    <div class="mt-20">
                        @guest
                            <a href="{{ route('register') }}"
                                class="rounded-full bg-baseOrange-light px-6 py-3 text-lg font-bold text-baseBlack transition duration-300 hover:bg-baseOrange-light/80 md:text-xl">Créer
                                un compte</a>
                        @endguest
                        @auth
                            <a href="{{ route('explore') }}"
                                class="rounded-full bg-baseOrange-light px-6 py-3 text-lg font-bold text-baseBlack transition duration-300 hover:bg-baseOrange-light/80 md:text-xl">Explorer</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layouts.app>
