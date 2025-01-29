<x-layouts.app class="app" title="Dashboard">


    <div class="bg-baseBlack bg-hero bg-cover bg-center bg-no-repeat">

        <div class="container mx-auto px-4 py-16 text-baseWhite">
            <h1 class="w-full pb-12 pt-8 text-center font-sand text-3xl font-bold">Vos <span
                    class="text-baseOrange-light">recettes</span>
            </h1>
            @if (session('success'))
                <x-dashmessage message="{{ session('success') }}" color="green" />
            @endif

            <x-dashboardtable :recipes="$recipes" />
        </div>
    </div>
</x-layouts.app>
