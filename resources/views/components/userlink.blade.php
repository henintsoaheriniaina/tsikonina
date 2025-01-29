@props(['label', 'link', 'class' => ''])
@php
    $isActive = $link === request()->url();
@endphp
<a href={{ $link }} class="{{ $class }} {{ $isActive ? 'active' : '' }} capitalize">
    <p>
        {{ $slot }}
    </p>
    <p>{{ $label }}</p>
</a>
