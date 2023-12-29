@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center hover:text-yellow-500 text-sm text-yellow-500 no-underline '
            : 'inline-flex items-center hover:text-yellow-500 text-gray-500 no-underline';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
