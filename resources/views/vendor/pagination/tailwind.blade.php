@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination" class="mt-4 flex items-center justify-between">
        @if ($paginator->onFirstPage())
            <span class="cursor-not-allowed rounded bg-baseWhite px-4 py-2 text-baseOrange-light">
                Précédent
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="rounded bg-baseWhite px-4 py-2 text-baseOrange-light">
                Précédent
            </a>
        @endif

        <div class="mx-4 flex items-center space-x-2">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="rounded bg-baseWhite px-4 py-2 text-baseOrange-light">
                        {{ $element }}
                    </span>
                @endif

                {{-- Liste des pages --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="rounded bg-baseWhite px-4 py-2 text-baseOrange-light">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="rounded bg-transparent px-4 py-2 text-baseOrange-light">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Lien vers la page suivante --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="rounded bg-baseWhite px-4 py-2 text-baseOrange-light">
                Suivant
            </a>
        @else
            <span class="cursor-not-allowed rounded bg-baseWhite px-4 py-2 text-baseOrange-light">
                Suivant
            </span>
        @endif
    </nav>
@endif
