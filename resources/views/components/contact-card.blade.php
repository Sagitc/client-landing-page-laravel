@props([
    'label',
    'value',
    'icon' => 'phone',
    'href' => null
])

@php
    $tag = $href ? 'a' : 'div';
@endphp

<{{ $tag }} 
    @if($href) href="{{ $href }}" @endif
    {{ $attributes->class([
        'flex items-center gap-4 py-2 transition-all duration-300 group',
        'cursor-pointer select-none' => $href
    ]) }}
>
    <div class="text-blue-500 group-hover:text-brand/80 flex items-center justify-center shrink-0 transition-colors duration-300">
        <x-dynamic-component :component="'lucide-' . $icon" class="w-6 h-6 text-brand-secondary" />
    </div>

    <div class="flex flex-col">
        <span class="text-sm text-gray-400 font-normal leading-snug">
            {{ $label }}
        </span>
        <span @class([
            'text-base font-bold text-brand-primary tracking-tight leading-normal transition-all',
            'group-hover:text-brand' => $href
        ])>
            {{ $value }}
        </span>
    </div>
</{{ $tag }}>