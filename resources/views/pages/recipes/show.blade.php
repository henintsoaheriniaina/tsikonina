<x-layouts.app class="app" title="{{ ucfirst($recipe->title) }}">
    <div class="bg-hero bg-cover bg-center bg-no-repeat">
        <div class="px-4 py-16 backdrop-blur-sm">
            <div
                class="container mx-auto flex flex-col items-center justify-center gap-16 rounded-lg px-4 py-4 sm:py-12 lg:flex-row lg:items-start">
                <div class="flex w-full flex-col gap-4 lg:max-w-[500px]">
                    <div class="flex w-full flex-col gap-6 rounded-lg bg-white p-6 shadow-md lg:max-w-lg">
                        <div class="mb-4 border-b pb-4">
                            <h3 class="text-3xl font-bold text-gray-800">{{ $recipe->title }}</h3>
                            <p class="mt-1 text-sm font-medium capitalize text-baseOrange-light">
                                @if ($recipe->difficulty === 'easy')
                                    Facile
                                @elseif ($recipe->difficulty === 'medium')
                                    Moyen
                                @else
                                    Avancé
                                @endif
                            </p>
                        </div>

                        <div class="flex justify-between text-sm text-gray-600">
                            <p class="flex items-center gap-2">
                                👥 <span>{{ $recipe->servings }} personne(s)</span>
                            </p>
                            <p class="flex items-center gap-2">
                                ⌚ <span>{{ $recipe->cook_time + $recipe->prep_time }} min</span>
                            </p>
                        </div>

                        <div class="flex justify-between text-sm text-gray-500">
                            <a href="{{ route('profile', $recipe->user) }}"
                                class="font-semibold hover:text-baseOrange-light">
                                {{ $recipe->user->firstname . ' ' . $recipe->user->lastname }}
                            </a>
                            <p>Publié {{ $recipe->created_at->diffForHumans() }}</p>
                        </div>

                        @if (auth()->check() && $recipe->user_id === auth()->user()->id)
                            <div class="mt-6 flex flex-wrap items-center gap-4">
                                <a href="{{ route('recipes.edit', $recipe) }}"
                                    class="flex items-center gap-2 rounded-lg bg-green-500 px-4 py-2 font-semibold text-white transition hover:bg-green-400"
                                    aria-label="Modifier la recette">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.7" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg> <span>Éditer</span>
                                </a>

                                <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex items-center gap-2 rounded-lg bg-red-500 px-4 py-2 font-semibold text-white transition hover:bg-red-400"
                                        aria-label="Supprimer la recette">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.7" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg> <span>Supprimer</span>
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>


                    {{-- details / image --}}
                    <div class="mx-auto h-full w-full overflow-hidden pt-12">
                        <x-cld-image public-id="{{ $recipe->image_public_id ?: 'default-image.jpg' }}"
                            class="h-full w-full rounded-lg object-cover object-center" alt="{{ $recipe->title }}" />
                    </div>
                </div>
                <div class="w-full rounded-lg bg-baseWhite p-6 shadow-lg">
                    <div class="prose" style="width: 100%">
                        {!! $recipe->instructions !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
