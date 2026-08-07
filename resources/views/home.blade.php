@extends('layouts.app')

@section('title', 'Início | DS Engenharia')

@section('content')

<section class=" h-[calc(80vh-88px)]">
    <div class="max-w-6xl mx-auto h-full w-full flex ">
        <img
            src="{{ asset('images/hero/banner-desktop.jpeg') }}"
            alt="Banner DS Engenharia"
            class="flex-1 rounded-xl object-cover object-left">
    </div>

</section>

<section class="bg-white py-15">
    <div class="max-w-6xl mx-auto px-4 md:px-2 lg:px-0">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-center mb-4">Nossas especialidades</h2>
            <span class="text-lg font-medium text-center text-gray-500">
                Soluções completas de engenharia predial para preservar o valor e a segurança do seu <br/>imóvel.
            </span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <x-service-card
                serviceName="Restauração de fachadas"
                backgroundImage="images/services/facades.jpg"
                icon="building-2"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Recuperação estrutural"
                backgroundImage="images/services/structural-restoration.jpeg"
                icon="shield-check"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Projetos e reformas"
                backgroundImage="images/services/projects.jpg"
                icon="wrench"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Lavagem pressurizada"
                backgroundImage="images/services/washing.png"
                icon="waves"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Pintura"
                backgroundImage="images/services/painting.jpg"
                icon="paint-bucket"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Drenos"
                backgroundImage="images/services/drains.jpeg"
                icon="droplets"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Autovistoria"
                backgroundImage="images/services/inspection.jpg"
                icon="clipboard-check"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Elétrica"
                backgroundImage="images/services/electrical.jpg"
                icon="zap"
                link="{{ route('services') }}"
            />

            <x-service-card
                serviceName="Impermeabilização"
                backgroundImage="images/services/waterproofing.jpeg"
                icon="dam"
                link="{{ route('services') }}"
            />

        </div>

    </div>
</section>

<section class="hidden">
    <div class="max-w-6xl mx-auto py-4 px-4 rounded-xl md:px-2 lg:px-4">
        <div>
            <h2 class="text-2xl font-bold text-center mb-8">Cofiança e satisfação</h2>
            <div>
                relatos...
            </div>
        </div>
    </div>
</section>

@endsection