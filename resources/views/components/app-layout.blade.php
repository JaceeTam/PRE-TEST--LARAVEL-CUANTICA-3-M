<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuantica Group</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/291c56a30a.js" crossorigin="anonymous"></script>
   @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-gray-50">
    
    <div class="flex min-h-screen">
        <!-- Sidebarr -->
        @include('components.sidebar')       
        <div class="flex-1 flex flex-col">         
            <main class="flex-1 p-6">
                <!-- contenid variable -->
                {{ $slot ?? '' }}        
            </main>
            <footer class="py-6 text-center text-sm text-gray-500">
                Cuantica Group. Todos los derechos reservados.
            </footer>
        </div>

        <!-- Menú móvil -->
        <nav id="mobile-menu" class="hidden bg-white shadow-md">
            <ul class="flex flex-col p-4">
                <li class="py-2 border-b border-gray-200">
                    <a href="#nuevo-ingreso" class="text-black">Home</a>
                </li>
                <li class="py-2 border-b border-gray-200">
                    <a href="#collection" class="text-black">My Tasks</a>
                </li>
                <li class="py-2 border-b border-gray-200">
                    <a href="{{ url('/products') }}" class="text-black">My Groups</a>
                </li>
                <li class="py-2 border-b border-gray-200">
                    <a href="#sale" class="text-black">My Account</a>
                </li>
                <li class="py-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="cursor-pointer text-red-600 font-medium w-full text-left hover:text-red-700">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <div id="user-menu" class="hidden absolute right-4 top-16 bg-white shadow-lg rounded-lg p-4 w-64 z-50">
            <div class="border-b pb-3 mb-3">
                <p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
            </div>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}" class="block text-gray-700 hover:text-[#FF9C00] transition">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="block text-gray-700 hover:text-[#FF9C00] transition">
                        Mi Perfil
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left text-red-600 font-medium hover:text-red-700 transition">
                            Cerrar sesión
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </header>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const userBtn = document.getElementById('user-btn');
        const userMenu = document.getElementById('user-menu');

        // Toggle menú móvil
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Toggle menú de usuario
        userBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('hidden');
        });

        // Cerrar menú de usuario al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!userMenu.contains(e.target) && !userBtn.contains(e.target)) {
                userMenu.classList.add('hidden');
            }
        });

        // Cambiar color de header al hacer scroll
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
    <main class="flex-1 p-6 overflow-y-auto mt-10">
        {{ $slot }}
    </main>

    <footer></footer>

</body>
</html>