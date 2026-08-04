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

    <section class="container mx-auto py-16 px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Nossos Destaques</h2>
    </section>

@endsection