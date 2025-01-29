<div class="bg-hero bg-cover bg-center bg-no-repeat px-4 py-16 text-baseWhite sm:px-0 sm:py-32">
    <div
        class="container mx-auto flex flex-col items-center justify-center gap-8 px-4 md:flex-row md:justify-between md:px-6">
        <div class="flex max-w-[700px] flex-col items-center justify-center gap-8 md:w-1/2 md:items-start">
            <h1 class="text-center font-sand text-4xl font-bold sm:text-5xl md:text-left">Les Saveurs de Madagascar à
                Votre Table</h1>
            <p class="text-center md:text-left"> l'espace où vous pouvez non seulement explorer la richesse de la cuisine
                malgache, mais aussi partager vos propres recettes et transmettre votre passion culinaire. 🇲🇬</p>
            <div class="flex gap-8">
                <a href={{ route('explore') }}
                    class="action border-transparent bg-baseOrange-light hover:bg-baseOrange-dark">Explorer <svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                <a href={{ route('recipes.create') }} class="action border-baseWhite bg-transparent">Ajouter</a>
            </div>
        </div>
        <div class="max-w-[300px] scale-x-[-1] transform sm:w-1/2 md:max-w-[500px]">
            <img src={{ asset('images/pngegg(3).png') }} alt="">
        </div>
    </div>
</div>
