@props(['recipes'])

<div class="overflow-x-auto rounded-lg shadow-md">
    <table class="w-full border-collapse bg-baseWhite text-left text-sm text-baseGray-dark">
        <thead class="bg-baseGray-light text-baseBlack">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium">Image</th>
                <th scope="col" class="px-6 py-4 font-medium">Titre</th>
                <th scope="col" class="px-6 py-4 font-medium">Difficulté</th>
                <th scope="col" class="px-6 py-4 font-medium">Temps total</th>
                <th scope="col" class="px-6 py-4 font-medium">Portions</th>
                <th scope="col" class="px-6 py-4 font-medium">Date de création</th>
                <th scope="col" class="px-6 py-4 text-right font-medium">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($recipes as $recipe)
                <x-reciperow :recipe="$recipe" />
            @empty
                <tr>
                    <td colspan="7" class="px-6 py-4 text-center text-baseGray-dark">
                        Aucune recette trouvée.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-12 font-bold">
    {{ $recipes->links() }}
</div>
