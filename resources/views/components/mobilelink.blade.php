@props(['label', 'link'])
@php
    $isActive = $link === request()->url();
@endphp
<a href={{ $link }} class="mobilelink {{ $isActive ? 'active' : '' }} capitalize"> {{ $label }} </a>
