@props(['recipe'])
<div class="mx-auto flex w-full max-w-[400px] flex-col gap-4 text-baseBlack">
    <div class="rounded-lg bg-baseWhite p-6 shadow-lg">
        <div class="mb-4 border-b pb-4">
            <h3 class="truncate text-2xl font-bold">{{ $recipe->title }}</h3>
            <p class="text-sm font-medium capitalize text-baseOrange-light">
                @if ($recipe->difficulty === 'easy')
                    Facile
                @elseif ($recipe->difficulty === 'medium')
                    Moyen
                @else
                    Avancé
                @endif
            </p>
        </div>

        <div class="mb-4 flex justify-between text-sm text-gray-700">
            <p class="flex items-center gap-1">
                👥 {{ $recipe->servings }} personne(s)
            </p>
            <p class="flex items-center gap-1">
                ⌚ {{ $recipe->prep_time + $recipe->cook_time }} min
            </p>
        </div>

        <div class="flex justify-between text-sm text-gray-500">
            <p href="{{ route('profile', $recipe->user) }}" class="hover:text-baseOrange font-semibold">
                {{ $recipe->user->firstname . ' ' . $recipe->user->lastname }}
            </p>
            <p>Publié {{ $recipe->created_at->diffForHumans() }}</p>
        </div>
    </div>

    <div class="h-[400px] overflow-hidden rounded-lg">
        <img src="{{ asset('storage/' . ($recipe->image_url ?: 'default-image.jpg')) }}"
            class="h-full w-full object-cover" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
    </div>
</div>
