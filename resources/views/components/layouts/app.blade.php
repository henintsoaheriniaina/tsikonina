@props(['title' => 'tsikonina'])
<!doctype html>
<html>

<head>
    <link rel="icon" href="{{ asset('images/emoji.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/jq.js'])
    <title>{{ $title ? ucfirst($title) : 'Tsikonina' }}</title>
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
