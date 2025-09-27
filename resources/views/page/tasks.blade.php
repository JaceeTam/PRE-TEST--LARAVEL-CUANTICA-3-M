<x-app-layout>
<div class="bg-gray-100 min-h-screen p-4 flex items-center justify-center">
    <div class="container mx-auto max-w-6xl p-6 bg-white rounded-xl shadow-lg flex flex-col md:flex-row gap-6">
        
        <!-- Lista de tareas -->
        <div class="md:w-1/2 p-4 bg-gray-50 rounded-lg shadow-inner">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Mis Tareas</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prioridad</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Crear Diagrama de Caso de Uso</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Alta</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mon 07, Sep 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Crear Diagrama de Caso de Actividades</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Media</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mon 07, Sep 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Enviar informe -->
        <div class="md:w-1/2 p-4 bg-gray-50 rounded-lg shadow-inner flex flex-col">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Enviar Informe de tarea</h2>
            <p class="text-gray-600 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus ut enim ac lobortis. Mauris placerat tristique justo, sed malesuada turpis auctor ut.
            </p>

            <button class="mb-4 w-full px-4 py-3 text-left text-sm font-medium text-gray-600 bg-gray-200 rounded-md hover:bg-gray-300 transition">
                Cargar evidencias
            </button>

            <select class="mb-6 block w-full px-4 py-3 text-sm text-gray-600 bg-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Pendiente</option>
                <option>En proceso</option>
                <option>Completada</option>
            </select>

            <button class="w-full px-4 py-3 text-sm font-semibold text-white bg-blue-500 rounded-md shadow hover:bg-blue-600 transition">
                Enviar Informe
            </button>
        </div>

    </div>
</div>
</x-app-layout>
