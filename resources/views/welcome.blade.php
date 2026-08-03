<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DS Engenharia</title>

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="">
    <header class="w-full py-2 bg-white">
        <!-- <div class="container flex mx-auto justify-between items-center py-2 max-w-6xl">
            <a href="{{ route('home') }}" class="flex items-center cursor-pointer">
                <img class="h-22" src="{{ asset('images/logo/logo-main.png') }}" alt="Logo" />
            </a>
            <nav>
                <ul id="navbar" class="flex gap-4">
                    <li><a href="{{ route('home') }}">Início</a></li>
                    <li><a href="{{ route('services') }}">Serviços</a></li>
                    <li><a href="{{ route('about') }}">Sobre nós</a></li>
                </ul>
            </nav>
            <div>
                <button class="btn">
                    Whatsapp
                </button>
            </div>
        </div> -->
        <div class="navbar bg-white max-w-6xl mx-auto">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul
                        tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li>
                            <a>Parent</a>
                            <ul class="p-2">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </li>
                        <li><a>Item 3</a></li>
                    </ul>
                </div>
                <a class="flex items-center cursor-pointer">
                    <img class="h-22" src="{{ asset('images/logo/logo-main.png') }}" alt="Logo" />
                </a>
            </div>
            <nav id="navbar" class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 text-brand text-xl font-semibold">
                    <li><a class="hover:bg-brand hover:text-white" href="{{ route('home') }}">Início</a></li>
                    <li><a href="{{ route('services') }}">Serviços</a></li>
                    <li><a href="#">Portfólio</a></li>
                    <li><a href="{{ route('about') }}">Sobre nós</a></li>
                </ul>
            </nav>
            <div class="navbar-end">
                <a class="btn bg-brand">Whatsapp</a>
            </div>
        </div>
    </header>

</body>

</html>