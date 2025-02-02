@props(['title' => 'tsikonina'])
<!doctype html>
<html>

<head>
    <link rel="icon" href="{{ asset('images/emoji.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (app()->environment('production'))
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <script src="{{ asset('build/assets/app-d4ONcH6L.js') }}" defer></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <title class="uppercase">{{ $title ? ucfirst("Tsikonina | $title") : 'Tsikonina' }}</title>
</head>

<body class="max-w-screen min-h-screen bg-baseWhite font-sand text-baseBlack">
    <x-header />
    @if (session('messageSent'))
        <x-dashmessage message="{{ session('messageSent') }}" color="green" />
    @endif
    <main class="">
        {{ $slot }}
    </main>
    <x-footer />
</body>
<script>
    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });
</script>

</html>
