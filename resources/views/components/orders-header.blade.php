<x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Orders') }}
            </h2>
            <div class="flex gap-2">
                <a href="{{ route('orders.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Ver pedidos') }}
                </a>
                <a href="{{ route('orders.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Crear pedidos') }}
                </a>
                <a href="{{ route('orders.delete') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Eliminar pedidos') }}
                </a>
            </div>
            
        </div>

    </x-slot>