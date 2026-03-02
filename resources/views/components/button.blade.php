@props([
    'type' => 'primary',
    'href' => null,
])

@php
    if ($type == 'outline') {
        $typeClass = "bg-transparent text-primary border-primary hover:bg-primary hover:text-white";
    } elseif ($type == 'outline-second') {
        $typeClass = "bg-transparent text-white border-white hover:bg-white hover:border-white hover:text-primary";
    } else {
        $typeClass = "bg-primary text-white border-primary hover:opacity-90";
    }

    $baseClass = "flex items-center px-3 py-1.5 text-base font-medium rounded-lg border transition-all duration-300 {{ $typeClass }}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class([$baseClass]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->class([$baseClass]) }}>{{ $slot }}</button>
@endif