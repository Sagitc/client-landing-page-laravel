@props([
    'serviceName', 
    'backgroundImage', 
    'icon' => 'check',
    'link' => '#'
])

<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col justify-between transition-all duration-300 hover:border-brand hover:shadow-md group">

    <div>
        <div class="relative w-full h-52 overflow-hidden">
            <div class="absolute top-4 left-4 z-10 w-10 h-10 rounded-xl flex items-center justify-center  shadow-md bg-brand-secondary backdrop-blur-sm group-hover:bg-brand transition-colors duration-300">
                <x-dynamic-component :component="'lucide-' . $icon" class="w-5 h-5 text-white" />
            </div>

            <picture>
                <source srcset="{{ asset($backgroundImage) }}" media="(min-width: 768px)" />
                <img 
                    src="{{ asset($backgroundImage) }}" 
                    alt="{{ $serviceName }}" 
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                />
            </picture>
        </div>

        <div class="">
            <h3 class="text-lg font-bold text-brand-primary p-4">
                {{ $serviceName }}
            </h3>
        </div>
    </div>

    <!-- <div class="p-6 pt-0">
        <a href="{{ $link }}" class="inline-flex items-center gap-1 text-sm font-semibold text-transparent group-hover:text-brand transition-colors duration-300">
            Saiba mais 
            <x-lucide-arrow-right class="w-4 h-4 transition-transform group-hover:translate-x-1" />
        </a>
    </div> -->

</div>