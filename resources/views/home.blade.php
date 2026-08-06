@extends('layouts.app')

@section('title', 'Início | DS Engenharia')

@section('content')

<section class="text-white h-[calc(55vh-88px)] py-20 text-center relative overflow-hidden">
    <div class="container mx-auto px-4 md:px-2 lg:px-4">
        <picture class="container absolute inset-0 w-full h-full mx-auto">
            <source media="(min-width: 768px)" srcset="{{ asset('images/hero/banner-desktop.jpg') }}">
            <img
                src="{{ asset('images/hero/banner-mobile.jpg') }}"
                alt="Banner DS Engenharia"
                class="w-full h-full object-cover object-center rounded-xl">
        </picture>

        <div class="container mx-auto h-90 px-4 flex flex-col justify-center items-center text-white md:px-2 lg:px-4">
            <h1 class="text-5xl font-bold mb-4 drop-shadow-md">DS ENGENHARIA</h1>
            <p class="text-xl max-w-2xl mx-auto drop-shadow-sm">
                Soluções inteligentes em Manutenção Predial.
            </p>
        </div>
    </div>

</section>

<section class="">
    <div class="container mx-auto py-4 px-4 bg-gray-100 rounded-xl md:px-2 lg:px-4">
        <h2 class="text-2xl font-bold text-center mb-8">Serviços que oferecemos</h2>
        <div class="container grid grid-cols-1 gap-4 gap-y-20 md:grid-cols-2 lg:grid-cols-3">
            <x-service-card
                serviceName="Manutenção Predial"
                backgroundImage="images/hero/banner-mobile.jpg" />
            <x-service-card
                serviceName="Reformas e Reparos"
                backgroundImage="images/hero/banner-mobile.jpg" />
            <x-service-card
                serviceName="Consultoria Técnica"
                backgroundImage="images/hero/banner-mobile.jpg" />
            <x-service-card
                serviceName="Consultoria Técnica"
                backgroundImage="images/hero/banner-mobile.jpg" />
            <x-service-card
                serviceName="Consultoria Técnica"
                backgroundImage="images/hero/banner-mobile.jpg" />
            <x-service-card
                serviceName="Consultoria Técnica"
                backgroundImage="images/hero/banner-mobile.jpg" />
        </div>
    </div>
</section>

<section class="">
    <div class="container mx-auto py-4 px-4 bg-gray-100 rounded-xl md:px-2 lg:px-4">
        <div>
            <h2 class="text-2xl font-bold text-center mb-8">Serviços que oferecemos</h2>
            <div>
                relatos...
            </div>
        </div>
    </div>
</section>

@endsection