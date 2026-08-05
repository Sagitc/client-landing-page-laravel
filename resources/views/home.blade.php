@extends('layouts.app')

@section('title', 'Início | DS Engenharia')

@section('content')
    
    <section class="bg-brand text-white text-center">
        <div 
            class="container mx-auto h-96 py-10 px-4 bg-center bg-cover bg-no-repeat md:px-2 lg:px-0"
            style="background-image: url('{{ asset('images/hero/banner-mobile.jpg') }}');"
        >
            <h1 class="text-5xl text-brand font-bold mb-4">DS ENGENHARIA</h1>
            <p class="text-xl text-brand max-w-2xl mx-auto">
                Soluções inteligentes em Manutenção Predial.
            </p>
        </div>
    </section>

    <section class="">
        <div class="container mx-auto py-10 px-4 md:px-2 lg:px-0">
            <h2 class="text-2xl font-bold text-center mb-8">Serviços que oferecemos</h2>
            <div class="container grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <x-service-card 
                    serviceName="Manutenção Predial" 
                    backgroundImage="images/hero/mobile-banner.jpg" 
                />
                <x-service-card 
                    serviceName="Reformas e Reparos" 
                    backgroundImage="images/hero/mobile-banner.jpg" 
                />
                <x-service-card 
                    serviceName="Consultoria Técnica" 
                    backgroundImage="images/hero/mobile-banner.jpg" 
                />

            </div>
        </div>
    </section>

@endsection