@props([
    'label',
    'value',
    'icon' => 'phone',
    'href' => null
])

@php
    // Se for passado um href, vira uma tag <a>, senão vira uma <div>
    $tag = $href ? 'a' : 'div';
@endphp

<{{ $tag }} 
    @if($href) href="{{ $href }}" @endif
    {{ $attributes->class([
        'flex items-center gap-4 p-4 rounded-2xl bg-white border border-slate-200 shadow-sm transition-all duration-300 group hover:border-brand hover:bg-brand',
        ' cursor-pointer' => $href
    ]) }}
>
    <div class="w-12 h-12 rounded-xl bg-brand group-hover:bg-white flex items-center justify-center text-white group-hover:text-brand shrink-0 shadow-sm transition-colors duration-300">
        <x-dynamic-component :component="'lucide-' . $icon" class="w-6 h-6" />
    </div>

    <div class="flex flex-col">
        <span class="text-xs font-semibold text-gray-500 group-hover:text-white/90 tracking-wider uppercase transition-colors duration-300">
            {{ $label }}
        </span>
        <span class="text-lg font-bold text-brand group-hover:text-white tracking-tight transition-colors duration-300">
            {{ $value }}
        </span>
    </div>
</{{ $tag }}>