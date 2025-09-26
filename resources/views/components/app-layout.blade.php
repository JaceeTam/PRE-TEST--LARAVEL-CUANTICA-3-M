<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuantica Group</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>

    {{-- <body class="flex h-screen bg-[#fefaf6]">
    <!-- Sidebar izquierda -->
    <aside
        class="fixed left-0 top-0 h-full bg-white shadow-md flex flex-col transform -translate-x-52 hover:translate-x-0 transition-transform duration-300 w-64">
        <!-- Perfil usuario -->
        <div class="p-4 flex items-center gap-3">
            <img src="https://i.pinimg.com/736x/99/c5/a6/99c5a64e5a1a50f4f4e804b7014b0b4b.jpg" alt="user"
                class="rounded-full w-15 h-15">
            <div>
                <p class="font-semibold text-gray-800">Jace Martell</p>
                <span class="text-sm text-green-500 flex items-center gap-1">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span> Online
                </span>
            </div>
        </div>

        <!-- Navegación -->
        <nav class="flex-1 p-4">
            <ul class="space-y-3">
                <li>
                    <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-orange-50 transition-colors">
                        <span class="text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>

                        </span>
                        <span class="font-medium text-gray-500">Home</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-orange-50 transition-colors">
                        <span class="text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                            </svg>

                        </span>
                        <span class="font-medium text-gray-500">My Tasks</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-orange-50 transition-colors">
                        <span class="text-xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                        </span>
                        <span class="font-medium text-gray-700">My Groups</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3 p-3 rounded-lg hover:bg-orange-50 transition-colors">
                        <span class="text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                        </span>
                        <span class="font-medium text-gray-700">My Account</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Footer / Logout -->
        <div class="p-4 border-t">
            <button
                class="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-red-50 text-red-600 font-medium transition-colors">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>

                </span> Logout
            </button>
        </div>
    </aside> --}}


    {{-- OPCION 2 --}}
    <header class="fixed top-0 left-0 w-full z-50">

        <!-- Barra superior negra -->
        <div class="bg-black text-white text-center font-semibold text-sm py-1.5"></div>

        <!-- Barra principal -->
        <div id="main-header"
            class="flex justify-between items-center px-4 py-2 transition-colors duration-300 bg-transparent">

            <!-- Izquierda: menú hamburguesa -->
            <div class="flex items-center gap-3 text-xl md:text-2xl">
                <button id="menu-btn" class="text-current focus:outline-none">
                    <!-- Icono de hamburguesa -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
            </div>

            <!-- Derecha: íconos usuario y carrito -->
            <div class="flex items-center gap-3 text-xl md:text-2xl">
                <button id="user-btn" class="text-current focus:outline-none">
                    <!-- Icono usuario -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>

                <button onclick="window.location='{{ url('/cart') }}'" class="text-current focus:outline-none">
                    <!-- Icono time -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                </button>
            </div>
        </div>

        <!-- Menú móvil -->
        <nav id="mobile-menu" class="hidden bg-white shadow-md">
            <ul class="flex flex-col p-4">
                <li class="py-2 border-b border-gray-200"><a href="#nuevo-ingreso" class="text-black">Home</a></li>
                <li class="py-2 border-b border-gray-200"><a href="#collection" class="text-black">My Tasks</a>
                </li>
                <li class="py-2 border-b border-gray-200"><a href="{{ url('/products') }}" class="text-black">My
                        Groups</a></li>
                {{-- <li class="py-2 border-b border-gray-200"><a href="#categorias" class="text-black">My Account</a></li> --}}
                <li class="py-2"><a href="#sale" class="text-black">My Account</a></li>
            </ul>
        </nav>
    </header>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Cambiar color de iconos al hacer scroll
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-white');
                header.querySelectorAll('h1, button').forEach(el => el.classList.add('text-black'));
                header.querySelectorAll('h1, button').forEach(el => el.classList.remove('text-white'));
            } else {
                header.classList.remove('bg-white');
                header.classList.add('bg-transparent');
                header.querySelectorAll('h1, button').forEach(el => el.classList.add('text-white'));
                header.querySelectorAll('h1, button').forEach(el => el.classList.remove('text-black'));
            }
        });
    </script>


    <!-- Contenido dinámico -->
    <main class="flex-1 p-6 overflow-y-auto">
        {{ $slot }}
    </main>

    <footer></footer>

</body>
</html>
