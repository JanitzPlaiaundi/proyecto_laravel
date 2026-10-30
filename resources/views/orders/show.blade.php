@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    @forelse ($orders as $order)
        <div class="p-5 gap-5 flex text-white">
            <p>Id del pedido: {{$order->id}}</p>
            <p>Id del usuario: {{$order->user_id}}</p>
            <p>Direccion: {{$order->user_address}}</p>
            <p>Precio: {{$order->price}}</p>
        </div>
    @empty
        <div class="w-full h-full text-white flex justify-center items-center">
            <p>No ha encontrado pedidos</p>
        </div>
    @endforelse
</x-app-layout>