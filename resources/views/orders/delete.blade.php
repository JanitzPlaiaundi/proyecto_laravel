<x-app-layout>
    <x-orders-header />
    <form action="{{ route('orders.destroy') }}" method="POST" class="flex flex-col gap-4 p-5">
        @csrf
        @method('DELETE')
        <input type="text" placeholder="Id del pedido a eliminar" class="border border-gray-300 rounded px-4 py-2 mb-4 w-full" name="orderId" id="orderId">
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Eliminar pedido
        </button>
    </form>
</x-app-layout>