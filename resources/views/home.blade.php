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

<section id="services" class="rounded-lg py-15 scroll-mt-15">
    <div class="max-w-7xl mx-auto px-2">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-center text-brand-secondary mb-4">Nossas especialidades</h2>
            <span class="text-lg font-medium text-center text-brand-primary">
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

<section id="about" class="py-10 sm:py-28 rounded-lg scroll-mt-40">
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
            <div class="absolute -bottom-6 right-6 hidden rounded-xl bg-white p-4 shadow-lg sm:block">
                <div class="flex items-center gap-3">
                    <div class="grid h-12 w-12 place-items-center rounded-lg bg-brand-secondary">
                        <x-lucide-hard-hat class="h-6 w-6 text-white" />
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-brand-secondary">+18 anos</p>
                        <p class="text-xs text-brand-primary/80">de experiência técnica</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="text-xs font-bold uppercase tracking-widest text-brand-primary/80">Sobre a empresa</span>
            <h2 class="mt-3 text-3xl font-extrabold text-brand sm:text-4xl text-brand-secondary">Sobre a DS Engenharia</h2>
            <p class="mt-6 text-base leading-relaxed  sm:text-lg">
                DS Engenharia é uma empresa especializada em manutenção predial,
                com 18 anos de experiência no mercado, oferecendo soluções
                completas em engenharia civil para condomínios residenciais,
                comerciais e industriais. <strong class="text-brand-secondary">Nossa atuação é pautada pela excelência
                    técnica, segurança, compromisso com prazos e qualidade na execução
                    dos serviços</strong>, sempre buscando preservar, recuperar e valorizar o
                patrimônio de nossos clientes.
            </p>
            <p class="mt-4 text-base leading-relaxed text-muted-foreground sm:text-lg">
                Contamos com uma <strong class="text-brand-secondary">equipe de profissionais altamente qualificados</strong>, sob
                responsabilidade técnica de engenheiro habilitado, executando serviços
                de manutenção preventiva, corretiva e preditiva em conformidade com
                as normas da ABNT, Normas Regulamentadoras (NRs) e demais
                exigências técnicas vigentes. Cada projeto é desenvolvido com
                planejamento, acompanhamento técnico e rigoroso controle de
                qualidade, proporcionando maior segurança, durabilidade e
                desempenho às edificações.
            </p>

            <div class="mt-8 rounded-lg bg-brand-secondary p-5">
                <p class="text-sm font-semibold uppercase tracking-wider text-gray-500/80">Responsável Técnico</p>
                <p class="mt-1 text-lg font-bold text-white">Engenheiro Diego Soares</p>
                <p class="text-sm text-gray-400/80">CREA/RJ: 2020110274</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-16 scroll-mt-20">
    <div class="container mx-auto max-w-7xl flex flex-col justify-between">

        <h2 class="text-4xl font-bold text-center text-brand-secondary mb-10">
            Outras formas de contato
        </h2>

        <div class="flex gap-8 flex-col md:flex-row">
            <div class="bg-white rounded-xl p-8 flex-1">


                <div class="flex flex-col gap-4 mb-8">

                    <x-contact-card
                        label="Telefone / WhatsApp"
                        value="(21) 99315-3214"
                        icon="phone"
                        href="https://api.whatsapp.com/send?phone=5521993153214&text=Ol%C3%A1%2C%20gostaria%20de%20solicitar%20um%20or%C3%A7amento." />

                    <!-- @php
                $email = 'contato@dsengenharia.org';
                $mailtoUrl = "mailto:{$email}?subject=" . rawurlencode('Solicitação de Orçamento') . "&body=" . rawurlencode('Olá! Gostaria de um orçamento para serviços de manutenção.');
                @endphp
                <x-contact-card
                    label="E-mail"
                    value="contato@dsengenharia.org"
                    icon="mail"
                    :href="$mailtoUrl" /> -->

                    <x-contact-card
                        label="Horário de atendimento"
                        value="Seg–Sex, 8h às 18h"
                        icon="clock" />

                    <x-contact-card
                        label="Endereço"
                        value="Rua Santa Clara, 346 - Copacabana"
                        icon="map-pin" />

                </div>

                <div class="p-6 rounded-2xl bg-blue-50/40 border border-blue-100/60 shadow-sm flex flex-col ">

                    <div class="flex items-center gap-2 text-brand-secondary font-bold text-xs tracking-wider uppercase mb-2">
                        <x-lucide-map-pin class="w-4 h-4 text-brand-secondary" />
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

            <div class="flex-1 bg-white p-8 rounded-3xl shadow-sm border border-slate-100">

                <!-- Mensagem Visual de Sucesso (Inicialmente oculta) -->
                <div id="gmailSuccessMessage" class="hidden mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium items-center gap-2">
                    <x-lucide-check-circle-2 class="w-5 h-5 text-emerald-600 shrink-0" />
                    <span>Abrindo o Gmail... Seus dados foram preparados com sucesso!</span>
                </div>

                <form id="gmailContactForm" class="space-y-5">

                    <!-- Campo: Nome -->
                    <div>
                        <label for="gmail_name" class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Nome*</label>
                        <input
                            type="text"
                            id="gmail_name"
                            placeholder="Digite seu nome"
                            required
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 focus:outline-none focus:border-brand focus:bg-white transition duration-200 text-sm" />
                    </div>

                    <!-- Campo: E-mail -->
                    <div>
                        <label for="gmail_email" class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">E-mail*</label>
                        <input
                            type="email"
                            id="gmail_email"
                            placeholder="seu@email.com"
                            required
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 focus:outline-none focus:border-brand focus:bg-white transition duration-200 text-sm" />
                    </div>

                    <!-- Campo: Mensagem -->
                    <div>
                        <label for="gmail_message" class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Como podemos ajudar?*</label>
                        <textarea
                            id="gmail_message"
                            rows="4"
                            placeholder="Descreva brevemente o serviço..."
                            required
                            class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-800 focus:outline-none focus:border-brand focus:bg-white transition duration-200 text-sm resize-none"></textarea>
                    </div>

                    <!-- Botão de Ação -->
                    <button
                        type="submit"
                        class="w-full py-3.5 px-6 rounded-full bg-brand hover:bg-brand/90 text-brand-secondary font-bold text-sm tracking-wide shadow-md transition duration-300 flex items-center justify-center gap-2 cursor-pointer">
                        <x-lucide-send class="w-4 h-4" />
                        <span>Enviar via Gmail</span>
                    </button>

                </form>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const form = document.getElementById('gmailContactForm');
                    const successMsg = document.getElementById('gmailSuccessMessage');

                    if (form) {
                        form.addEventListener('submit', (e) => {
                            e.preventDefault();

                            const name = document.getElementById('gmail_name').value.trim();
                            const email = document.getElementById('gmail_email').value.trim();
                            const message = document.getElementById('gmail_message').value.trim();

                            if (!name || !email || !message) {
                                alert('Por favor, preencha todos os campos.');
                                return;
                            }

                            const destinatario = 'contato@dsengenharia.org';
                            const assunto = `Solicitação de Orçamento - ${name}`;
                            const corpo = `Olá, meu nome é ${name} (${email}).\n\n${message}`;

                            const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${encodeURIComponent(destinatario)}&su=${encodeURIComponent(assunto)}&body=${encodeURIComponent(corpo)}`;

                            // 1. Abre a tela do Gmail em uma nova aba
                            window.open(gmailUrl, '_blank');

                            // 2. Limpa todos os campos do formulário
                            form.reset();

                            // 3. Exibe o aviso visual de sucesso e oculta após 4 segundos
                            if (successMsg) {
                                successMsg.classList.remove('hidden');
                                setTimeout(() => {
                                    successMsg.classList.add('hidden');
                                }, 4000);
                            }
                        });
                    }
                });
            </script>

        </div>
    </div>
</section>

@endsection