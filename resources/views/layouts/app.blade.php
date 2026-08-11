<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- O @yield permite que cada página defina seu próprio título --}}
    <title>@yield('title', 'DS Engenharia | Manutenção e Reformas em Edificações')</title>

    <meta name="description" content="@yield('meta_description', 'Especialistas em reforma de fachada, impermeabilização e manutenção predial em Copacabana e Zona Sul e adjacências. Mais de 18 anos de experiência.')">

    <meta property="og:title" content="@yield('title', 'DS Engenharia | Reforma de Fachada e Manutenção Predial')">
    <meta property="og:description" content="@yield('meta_description', 'Especialistas em reforma de fachada, impermeabilização e manutenção predial no Rio de Janeiro.')">
    <meta property="og:image" content="{{ asset('images/og-share.jpg') }}"> {{-- Imagem que aparece quando compartilha o link no WhatsApp --}}
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="antialiased bg-[#fafafa] text-gray-900 flex flex-col gap-4 min-h-screen relative">

    {{-- HEADER / NAVBAR  --}}
    <header class="w-full bg-white/90 shadow-sm h-22 flex items-center sticky top-0 z-50 backdrop-blur-3xl">
        <div class="max-w-7xl w-full mx-auto flex justify-between items-center px-4 lg:px-0 py-2">

            <a href="{{ route('home') }}#hero" class="flex items-center cursor-pointer">
                <img class="h-18" src="{{ asset('images/logo/logo-main.png') }}" alt="Logo" />
            </a>

            <nav>
                <ul id="navbar" class="hidden gap-4 text-brand text-lg font-semibold md:flex lg:ml-50">
                    <li>
                        <a href="{{ route('home') }}#hero" data-anchor="#hero" class="nav-link-item underline-offset-8 decoration-2 text-brand-primary hover:text-brand-secondary px-4 py-2 rounded-lg transition duration-300">
                            Início
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#services" data-anchor="#services" class="nav-link-item underline-offset-8 text-brand-primary hover:text-brand-secondary decoration-2 px-4 py-2 rounded-lg transition duration-300">
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#about" data-anchor="#about" class="nav-link-item underline-offset-8 text-brand-primary hover:text-brand-secondary decoration-2 px-4 py-2 rounded-lg transition duration-300">
                            Sobre nós
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#contact" data-anchor="#contact" class="nav-link-item underline-offset-8 text-brand-primary hover:text-brand-secondary decoration-2 px-4 py-2 rounded-lg transition duration-300">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="flex items-center gap-4">
                <a
                    href="https://api.whatsapp.com/send?phone=5521993153214&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20da%20DS%20Engenharia."
                    target="_blank"
                    class="text-brand hidden lg:flex items-center gap-2 text-sm font-medium">
                    <x-lucide-phone class="w-5 h-5 text-brand-secondary" />
                    (21) 99315-3214
                </a>
                <a
                    href="https://api.whatsapp.com/send?phone=5521993153214&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20da%20DS%20Engenharia."
                    target="_blank"
                    class="text-white bg-brand-secondary hidden md:flex px-3 p-2 rounded-lg font-medium">
                    <img class="h-6 mr-2" src="{{ asset('images/icons/whatsapp-color.svg') }}" alt="Whatsapp Icon" />
                    Whatsapp
                </a>
            </div>

            <div class="dropdown dropdown-end md:hidden">
                <div tabindex="0" role="button" class="btn btn-ghost focus:ring-2 focus:ring-blue-500">
                    <x-lucide-menu class="w-6 h-6 md:hidden text-brand-secondary" />
                </div>

                <ul tabindex="-1" class="dropdown-content menu bg-base-100 rounded-box z-1 p-2 w-50 text-nowrap text-white shadow-sm">
                    <li><a href="{{ route('home') }}#hero" data-anchor="#hero" class="nav-link-item">Início</a></li>
                    <li><a href="{{ route('home') }}#services" data-anchor="#services" class="nav-link-item">Serviços</a></li>
                    <li><a href="{{ route('home') }}#about" data-anchor="#about" class="nav-link-item">Sobre nós</a></li>
                    <li><a href="{{ route('home') }}#contact" data-anchor="#contact" class="nav-link-item">Contato</a></li>
                </ul>
            </div>

        </div>
    </header>

    {{-- MAIN AREA --}}
    <main class="grow flex flex-col gap-8 px-4 lg:px-2">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-brand-primary text-white py-8 text-center mt-auto">
        <div class="flex flex-col gap-5 md:flex-row justify-between items-center max-w-7xl mx-auto px-4 lg:px-2">
            <div class="flex flex-col items-start">
                <span class="font-extrabold text-lg">DS Engenharia</span>
                <span class="text-sm text-gray-400">Manutenção Predial</span>
            </div>
            <p class="text-sm text-gray-400 text-center md:text-right">&copy; {{ date('Y') }} DS Engenharia - Todos os direitos reservados.<br />
                CNPJ: 12.345.678/0001-90
            </p>
        </div>
    </footer>

</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navLinks = document.querySelectorAll(".nav-link-item");
        const sections = document.querySelectorAll("section[id]");

        const activeClasses = ["underline", "underline-offset-8", "decoration-2", "text-brand-secondary"];

        function changeActiveLink(targetId) {
            navLinks.forEach(link => {
                if (link.getAttribute("data-anchor") === `#${targetId}`) {
                    link.classList.add(...activeClasses);
                } else {
                    link.classList.remove(...activeClasses);
                }
            });
        }

        navLinks.forEach(link => {
            link.addEventListener("click", (e) => {
                const href = link.getAttribute("href");
                if (href.includes("#")) {
                    const targetId = href.split("#")[1];
                    changeActiveLink(targetId);
                }
            });
        });

        const observerOptions = {
            root: null,
            rootMargin: "-25% 0px -70% 0px",
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    changeActiveLink(entry.target.id);
                }
            });
        }, observerOptions);

        sections.forEach(section => observer.observe(section));
    });
</script>

</html>