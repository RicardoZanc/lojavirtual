<x-app-layout>
    <h3 class="text-center">Lista de Produtos</h3>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif
    <a href="{{url('products/new')}}">
        <button>Adicionar</button>
    </a>

    
    
    <section class="containe mx-auto grid grid-cols-4">
        @foreach($products as $product)
        <div class="px-4">
            <img src="{{ asset('img/product-placeholder.png') }}" width="500" height="600" alt="product image">
            {{$product['name']}} {{$product['price']}}
            <a href="{{ url('products/update', ['id' => $product->id]) }}">Editar</a>
            <a href="{{ url('/products/delete', ['id' => $product->id]) }}">Deletar</a>
        </div>
        @endforeach

    </section>


    <a href="{{ url('/dashboard') }}">Voltar</a>
</x-app-layout>