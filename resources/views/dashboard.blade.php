<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-600 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Productos</h3>

                    @if (empty($products))
                        <p>No hay productos disponibles.</p>
                    @else
                        <div class="overflow-auto">
                            <table class="w-full border-collapse border border-gray-400 dark:border-gray-600">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-600">
                                        <th class="border border-gray-400 dark:border-gray-600 px-4 py-2 text-left">Nombre</th>
                                        <th class="border border-gray-400 dark:border-gray-600 px-4 py-2 text-left">Precio</th>
                                        <th class="border border-gray-400 dark:border-gray-600 px-4 py-2 text-left">Stock</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="border border-gray-400 dark:border-gray-600 px-4 py-2">{{ $product->name }}</td>
                                            <td class="border border-gray-400 dark:border-gray-600 px-4 py-2">{{ number_format((float) $product->price, 2) }}</td>
                                            <td class="border border-gray-400 dark:border-gray-600 px-4 py-2">{{ $product->stock }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
