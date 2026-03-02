@props([
    'href' => '/',
])

@php
    $active = request()->is(trim($href, '/')) || request()->is(trim($href, '/') . '/*');
    $class = $active
    ? "text-primary font-medium"
    : "text-black transition-all duration-300 hover:text-primary hover:font-medium"
@endphp

<a href="{{ $href }}" {{ $attributes->class([$class]) }}>{{ $slot }}</a>