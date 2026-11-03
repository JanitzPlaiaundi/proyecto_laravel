<x-app-layout>
    <x-orders-header />
    <div class="flex flex-wrap gap-5 p-5 text-white">
        @forelse ($orders as $order)
        <div class="gap-2 flex flex-col">
            <p>Id del pedido: {{$order->id}}</p>
            <p>Id del usuario: {{$order->user_id}}</p>
            <p>Direccion: {{$order->user_address}}</p>
            <p>Precio: {{$order->price}}</p>
        </div>
        @empty
        <div class="w-full h-full flex justify-center items-center">
            <p>No ha encontrado pedidos</p>
        </div>
        @endforelse
    </div>


</x-app-layout>