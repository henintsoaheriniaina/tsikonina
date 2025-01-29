@props(['label', 'link'])
@php
    $isActive = $link === request()->url();
@endphp
<a href={{ $link }} class="navlink {{ $isActive ? 'active' : '' }} capitalize"> {{ $label }} </a>
