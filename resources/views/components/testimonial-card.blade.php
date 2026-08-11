@props([
    'number',
    'label',
    'icon' => 'building-2'
])

<div class="flex flex-col items-center justify-center text-center p-6 rounded-2xl">
    
    <div class="w-14 h-14 mb-4 rounded-2xl text-white shadow-md bg-linear-to-r from-brand-primary to-brand-secondary flex items-center justify-center">
        <x-dynamic-component :component="'lucide-' . $icon" class="w-7 h-7" />
    </div>
    
    <span class="text-3xl md:text-6xl font-extrabold tracking-tight bg-linear-to-r from-brand-primary to-brand-secondary bg-clip-text text-transparent mb-2">
        {{ $number }}
    </span>

    <p class="text-brand-primary text-right font-medium text-base md:text-lg">
        {{ $label }}
    </p>

</div>