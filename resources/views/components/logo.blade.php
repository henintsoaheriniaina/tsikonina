@props(['white' => false])

<a href="{{ route('index') }}" class="flex items-center justify-center">
    <img src="{{ asset('images/emoji.png') }}" class="h-12 w-12 object-contain" alt="Logo">

    <div class="ml-2">
        <p class="text-2xl font-bold">Tsiko<span
                class="{{ $white ? 'text-baseWhite' : 'text-baseOrange-light' }}">nina</span> </p>
        <p class="text-sm font-semibold">Malagasy 🇲🇬</p>
    </div>
</a>
