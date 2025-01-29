@props(['recipe'])
<tr class="bg-baseWhite hover:bg-baseGray-light">
    <td class="whitespace-nowrap px-6 py-4">
        <img src="{{ asset('storage/' . ($recipe->image_url ?: 'default-image.jpg')) }}" alt="{{ $recipe->title }}"
            class="h-16 w-16 rounded object-cover shadow-md" />
    </td>
    <td class="whitespace-nowrap px-6 py-4 font-medium text-baseBlack">
        <a href="{{ route('recipes.show', $recipe) }}" class="text-baseOrange-light hover:underline">
            {{ $recipe->title }}
        </a>
    </td>
    <td class="px-6 py-4 text-baseGray-dark">
        @if ($recipe->difficulty === 'easy')
            Facile
        @elseif ($recipe->difficulty === 'medium')
            Moyen
        @else
            Avancé
        @endif
    </td>
    <td class="px-6 py-4 text-baseGray-dark">
        {{ $recipe->prep_time + $recipe->cook_time }} min
    </td>
    <td class="px-6 py-4 text-baseGray-dark">
        {{ $recipe->servings }}
    </td>
    <td class="px-6 py-4 text-baseGray-dark">
        {{ $recipe->created_at->format('d/m/Y') }}
    </td>
    <td class="space-x-2 space-y-2 px-6 py-4 text-right">
        <a href="{{ route('recipes.edit', $recipe) }}" class="text-green-500 hover:underline">Modifier</a>
        <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:underline">
                Supprimer
            </button>
        </form>
    </td>
</tr>
