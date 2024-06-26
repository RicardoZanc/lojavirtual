<x-app-layout>
    @if ($message = Session::get('success'))
        <script>window.alert('{{$message}}')</script>
    @endif
    <section class="container mx-auto grid grid-cols-2 cursor-pointer  gap-4 sm:grid-cols-5">
        <div class="col-span-2 p-0 sm:col-span-5 flex justify-end">
        <x-primary-link class="mt-2" href="{{url('products/new')}}">Adicionar</x-primary-link>
        </div>
        @foreach($products as $product)
        <div class="hover:scale-[1.05]">
            <img src="{{ asset('img/product-placeholder.png') }}" alt="product image">
            <div>
                <h3 class="font-bold text-center text-lg">{{$product['name']}}</h3>
            </div>
            <div class="flex justify-between">
                <div class="font-bold"><p>Valor:</p></div><div>R$ {{$product['price']}}</div>
            </div>
            <div class="flex justify-end gap-2">
                <a href="{{ url('products/update', ['id' => $product->id]) }}" class="hover:text-sky-500">Editar</a>
                <a href="{{ url('/products/delete', ['id' => $product->id]) }}" class="hover:text-red-500">Apagar</a>
            </div>
        </div>
        @endforeach
    </section>

    
</x-app-layout>