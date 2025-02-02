<x-layouts.app title="Explorer">
    <div class="min-h-screen bg-baseBlack bg-hero bg-cover bg-center bg-no-repeat">

        <div class="container mx-auto px-4 py-16 text-baseWhite">
            <h1 class="w-full pb-24 pt-8 text-center font-sand text-3xl font-bold">Explorer les <span
                    class="text-baseOrange-light">recettes</span>
            </h1>
            <x-recipegrid :recipes="$recipes" />
        </div>
    </div>


</x-layouts.app>
