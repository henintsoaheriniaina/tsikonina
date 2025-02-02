<x-layouts.app class="app" title="{{ ucfirst($user->firstname) . ' ' . ucfirst($user->lastname) }}">
    <div class="bg-baseBlack bg-hero bg-cover bg-center bg-no-repeat">
        <div class="container mx-auto px-4 py-16 text-baseWhite">
            <div class="flex flex-col items-center">
                <div class="text-center">
                    <h2 class="text-2xl font-bold">{{ $user->firstname . ' ' . $user->lastname }}</h2>
                    <p class="mt-2 text-base text-baseGray-light"><strong>Email:</strong> {{ $user->email }}</p>
                </div>
            </div>

            <div class="mt-16">
                <x-recipegrid :recipes="$recipes" />
            </div>
        </div>
    </div>
</x-layouts.app>
