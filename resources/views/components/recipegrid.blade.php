<div class="">
    <div class="grid w-full grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($recipes as $recipe)
            <x-recipeitem :recipe="$recipe" />
        @empty
            <p class="col-span-full mt-20 text-center text-2xl font-bold text-baseOrange-light">
                Aucune recette trouvée.
            </p>
        @endforelse
    </div>
    <div class="mt-6">
        {{ $recipes->links() }}
    </div>
</div>
