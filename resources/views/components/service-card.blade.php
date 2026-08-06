@props(['serviceName', 'backgroundImage'])

<div class="flex flex-col gap-1">
    <div class="relative w-full h-80 rounded-xl overflow-hidden group">
        
        <picture>
            <source srcset="{{ asset($backgroundImage) }}" media="(min-width: 768px)" />
            <img
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                src="{{ asset($backgroundImage) }}"
                alt="{{ $serviceName }}" 
            />
        </picture>

        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>

        <h3 class="absolute bottom-3 left-3 right-3 text-lg font-semibold text-white drop-shadow-md">
            {{ $serviceName }}
        </h3>
    </div>

    <div>
        <a
            class="block w-full py-2 px-4 rounded-xl border border-brand text-black font-medium hover:bg-brand hover:text-white transition duration-300 text-center"
            href="#"
            target="_blank"
        >
            Saiba mais
        </a>
    </div>
</div>