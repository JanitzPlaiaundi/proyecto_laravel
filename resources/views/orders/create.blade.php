
<x-app-layout>
    <x-orders-header />
    <div>
        <form action="{{ route('orders.store') }}" method="POST" class="flex flex-col gap-4 p-5">
            <input type="text" placeholder="Direccion" class="border border-gray-300 rounded px-4 py-2 mb-4 w-full" name="user_address" id="user_address">
            <input type="number" placeholder="Precio" class="border border-gray-300 rounded px-4 py-2 mb-4 w-full" name="price" id="price">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear pedido
            </button>
        </form>
        </div>
</x-app-layout>