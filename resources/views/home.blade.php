@extends('layouts.app')

@section('title', 'DS Engenharia | Manutenção Predial')

@section('content')

<section id="hero" class="h-100 lg:h-180">
    <div class="max-w-7xl mx-auto h-full md:h-full w-full flex ">
        <img
            src="{{ asset('images/hero/banner-desktop.jpeg') }}"
            alt="Banner DS Engenharia"
            class="flex-1 h-full w-full rounded-lg object-cover  md:aspect-video overflow-hidden object-left">
    </div>

</section>

<section id="services" class="bg-white rounded-lg py-15 scroll-mt-15">
    <div class="max-w-7xl mx-auto px-2">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-center text-brand mb-4">Nossas especialidades</h2>
            <span class="text-lg font-medium text-center text-gray-500">
                Soluções completas de engenharia predial para preservar o valor e a segurança do seu <br />condomínio.
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <x-service-card
                serviceName="Restauração de fachadas"
                backgroundImage="images/services/facades.jpg"
                icon="building-2"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Recuperação estrutural"
                backgroundImage="images/services/structural-restoration.jpeg"
                icon="shield-check"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Projetos e reformas"
                backgroundImage="images/services/projects.jpg"
                icon="wrench"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Lavagem pressurizada"
                backgroundImage="images/services/washing.png"
                icon="waves"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Pintura"
                backgroundImage="images/services/painting.jpg"
                icon="paint-bucket"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Drenos"
                backgroundImage="images/services/drains.jpeg"
                icon="droplets"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Autovistoria"
                backgroundImage="images/services/inspection.jpg"
                icon="clipboard-check"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Elétrica"
                backgroundImage="images/services/electrical.jpg"
                icon="zap"
                link="{{ route('services') }}" />

            <x-service-card
                serviceName="Impermeabilização"
                backgroundImage="images/services/waterproofing.jpeg"
                icon="dam"
                link="{{ route('services') }}" />

        </div>

    </div>
</section>

<section id="history" class="py-2 text-white overflow-hidden rounded-lg scroll-mt-15">
    <div class="container mx-auto px-4 relative">

        <div class="flex flex-col sm:flex-row justify-evenly">

            <x-testimonial-card
                icon="clock-arrow-up"
                number="+18"
                label="Anos de experiência" />

            <x-testimonial-card
                icon="check-circle-2"
                number="+1.500"
                label="Obras entregues" />

            <x-testimonial-card
                icon="check-check"
                number="100%"
                label="Compromisso com o prazo" />

        </div>

    </div>
</section>

<section id="about" class="bg-white py-10 sm:py-28 rounded-lg scroll-mt-40">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8">
        <div class="relative">
            <div class="absolute -inset-4 rounded-3xl bg-brand-red/10 -z-10"></div>
            <img
                src="{{ asset('images/logo/logo-main.png') }}"
                alt="Engenheiro Diego Soares em obra"
                width="1200"
                height="1200"
                loading="lazy"
                class="aspect-square w-full rounded-2xl object-contain shadow-xl" />
            <div class="absolute -bottom-6 -right-2 hidden rounded-xl border border-border bg-white p-4 shadow-lg sm:block">
                <div class="flex items-center gap-3">
                    <div class="grid h-12 w-12 place-items-center rounded-lg bg-brand">
                        <x-lucide-hard-hat class="h-6 w-6 text-white" />
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-navy">+18 anos</p>
                        <p class="text-xs text-muted-foreground">de experiência técnica</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="text-xs font-bold uppercase tracking-widest text-gray-400/80">Sobre a empresa</span>
            <h2 class="mt-3 text-3xl font-extrabold text-brand sm:text-4xl">Sobre a DS Engenharia</h2>
            <p class="mt-6 text-base leading-relaxed  sm:text-lg">
                DS Engenharia é uma empresa especializada em manutenção predial,
                com 18 anos de experiência no mercado, oferecendo soluções
                completas em engenharia civil para condomínios residenciais,
                comerciais e industriais. <strong class="text-navy">Nossa atuação é pautada pela excelência
                    técnica, segurança, compromisso com prazos e qualidade na execução
                    dos serviços</strong>, sempre buscando preservar, recuperar e valorizar o
                patrimônio de nossos clientes.
            </p>
            <p class="mt-4 text-base leading-relaxed text-muted-foreground sm:text-lg">
                Contamos com uma <strong class="text-navy">equipe de profissionais altamente qualificados</strong>, sob
                responsabilidade técnica de engenheiro habilitado, executando serviços
                de manutenção preventiva, corretiva e preditiva em conformidade com
                as normas da ABNT, Normas Regulamentadoras (NRs) e demais
                exigências técnicas vigentes. Cada projeto é desenvolvido com
                planejamento, acompanhamento técnico e rigoroso controle de
                qualidade, proporcionando maior segurança, durabilidade e
                desempenho às edificações.
            </p>

            <div class="mt-8 rounded-xl  bg-brand text-white p-5">
                <p class="text-sm font-semibold uppercase tracking-wider text-gray-400/80">Responsável Técnico</p>
                <p class="mt-1 text-lg font-bold text-navy">Engenheiro Diego Soares</p>
                <p class="text-sm text-gray-400/80">CREA/RJ: 2020110274</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-16 bg-gray-50/50 scroll-mt-20">
    <div class="container mx-auto max-w-2xl bg-white rounded-xl p-8">

        <h2 class="text-2xl text-center font-bold text-slate-950 mb-8">
            Outras formas de contato
        </h2>

        <div class="flex flex-col gap-4 mb-8">

            <x-contact-card
                label="Telefone / WhatsApp"
                value="(21) 99315-3214"
                icon="phone"
                href="https://api.whatsapp.com/send?phone=5521993153214&text=Ol%C3%A1%2C%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." />

            @php
            $email = 'comercial@oicramengenharia.com.br';
            $mailtoUrl = "mailto:{$email}?subject=" . rawurlencode('Solicitação de Orçamento') . "&body=" . rawurlencode('Olá! Gostaria de um orçamento para serviços de manutenção.');
            @endphp
            <x-contact-card
                label="E-mail"
                value="contato@dsengenharia.org"
                icon="mail"
                :href="$mailtoUrl" />

            <x-contact-card
                label="Horário de atendimento"
                value="Seg–Sex, 8h às 18h"
                icon="clock" />

            <x-contact-card
                label="Endereço"
                value="Rua Santa Clara, 346 - Copacabana"
                icon="map-pin"
                />

        </div>

        <div class="p-6 rounded-2xl bg-blue-50/40 border border-blue-100/60 shadow-sm flex flex-col ">

            <div class="flex items-center gap-2 text-blue-600 font-bold text-xs tracking-wider uppercase mb-2">
                <x-lucide-map-pin class="w-4 h-4" />
                <span>Região de Atendimento</span>
            </div>

            <p class="text-slate-900 font-medium text-base leading-relaxed">
                Zoa sul e adjacências
            </p>

            <p class="text-slate-400 text-base leading-relaxed">
                Atendemos exclusivamente a Zona Sul do Rio de Janeiro.
            </p>

        </div>

    </div>
</section>

@endsection