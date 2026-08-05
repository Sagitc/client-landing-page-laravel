@props(['serviceName', 'backgroundImage'])

<div class="flex flex-col gap-2">
    <div>
        <picture>
            <source srcset="{{ asset($backgroundImage) }}" media="(min-width: 768px)" />
            <img 
                class="w-full h-48 object-cover rounded-lg"
                src="{{ asset($backgroundImage) }}" 
                alt="{{ $serviceName }}"
            />
        </picture>
        
        <h3 class="text-lg font-semibold">{{ $serviceName }}</h3>
    </div>
    <div class="flex flex-col gap-2">
        <a 
            class="w-full py-2 px-4 rounded-lg border border-brand text-black font-medium hover:bg-brand hover:text-white transition duration-300 text-center" 
            href="#" 
            target="_blank"
        >
            Saiba mais
        </a>
    </div>
</div>