<x-app-layout>
    <x-slot:title>Dashboard</x-slot:title>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Tareas</h3>
            <p class="text-3xl font-bold text-[#FF9C00]">12</p>
            <p class="text-sm text-gray-500 mt-2">Pendientes</p>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Horarios</h3>
            <p class="text-3xl font-bold text-[#FF9C00]">5</p>
            <p class="text-sm text-gray-500 mt-2">Esta semana</p>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Asistencias</h3>
            <p class="text-3xl font-bold text-[#FF9C00]">98%</p>
            <p class="text-sm text-gray-500 mt-2">Este mes</p>
        </div>
    </div>

    <!-- User Info -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Información del Usuario</h3>
        <div class="space-y-3">
            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Nombre:</span>
                <span class="text-gray-800">{{ Auth::user()->name }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Email:</span>
                <span class="text-gray-800">{{ Auth::user()->email }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Miembro desde:</span>
                <span class="text-gray-800">{{ Auth::user()->created_at->format('d/m/Y') }}</span>
            </div>
        </div>
    </div>
</x-app-layout>