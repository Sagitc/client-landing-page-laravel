<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- O @yield permite que cada página defina seu próprio título --}}
    <title>@yield('title', 'DS Engenharia')</title>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body class="antialiased bg-gray-50 text-gray-900 flex flex-col gap-4 min-h-screen">

    {{-- HEADER / NAVBAR  --}}
    <header class="w-full bg-white shadow-sm h-22 flex items-center">
        <div class="container w-full mx-auto flex justify-between items-center px-4 md:px-2 lg:px-0 py-2">

            <a href="{{ route('home') }}" class="flex items-center cursor-pointer">
                <img class="h-18" src="{{ asset('images/logo/logo-main.png') }}" alt="Logo" />
            </a>

            <nav>
                <ul id="navbar" class="hidden gap-4 text-brand text-lg font-semibold md:flex">
                    <li>
                        <a 
                            href="{{ route('home') }}"
                            @class([
                                'hover:underline underline-offset-8 decoration-2 px-4 py-2 rounded-lg transition duration-300',
                                'underline underline-offset-8' => request()->routeIs('home')
                            ])
                        >
                            Início
                        </a>
                    </li>
                    <li>
                        <a 
                            href="{{ route('services') }}"
                            @class([
                                'hover:underline underline-offset-8 decoration-2 px-4 py-2 rounded-lg transition duration-300',
                                'underline underline-offset-8' => request()->routeIs('services')
                            ])
                        >
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a 
                            href="{{ route('about') }}"
                            @class([
                                'hover:underline underline-offset-8 decoration-2 px-4 py-2 rounded-lg transition duration-300',
                                'underline underline-offset-8' => request()->routeIs('about')
                            ])
                        >
                            Sobre nós
                        </a>
                    </li>
                </ul>
            </nav>

            <a 
                href="https://api.whatsapp.com/send?phone={{ env('WHATSAPP_NUMBER') }}&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20da%20DS%20Engenharia." 
                target="_blank" 
                class="btn btn-outline btn-accent text-brand hidden md:flex"
            >
                <img class="h-6 mr-2" src="{{ asset('images/icons/whatsapp-color.svg') }}" alt="Whatsapp Icon" />
                Whatsapp
            </a>

            <div class="dropdown dropdown-end md:hidden">
                <div tabindex="0" role="button" class="btn btn-ghost focus:ring-2 focus:ring-blue-500">
                    <x-lucide-menu class="w-6 h-6 md:hidden text-black" />
                </div>
                
                <ul tabindex="-1" class="dropdown-content menu bg-base-100 rounded-box z-1 p-2 w-50 text-nowrap text-white shadow-sm">
                    
                    <li>
                        <a 
                            href="{{ route('home') }}"
                            @class([
                                'underline underline-offset-8' => request()->routeIs('home')
                            ])
                        >
                            Início
                        </a>
                    </li>

                    <li>
                        <a 
                            href="{{ route('services') }}"
                            @class([
                                'underline underline-offset-8' => request()->routeIs('services')
                            ])
                        >
                            Serviços
                        </a>
                    </li>

                    <li>
                        <a 
                            href="{{ route('about') }}"
                            @class([
                                'underline underline-offset-8' => request()->routeIs('about')
                            ])
                        >
                            Sobre nós
                        </a>
                    </li>
                    
                </ul>
            </div>

        </div>
    </header>

    {{-- MAIN AREA --}}
    <main class="grow flex flex-col gap-8 first:mt-8">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-white py-8 text-center mt-auto">
        <p>&copy; {{ date('Y') }} DS Engenharia. Todos os direitos reservados.</p>
    </footer>

</body>
</html>