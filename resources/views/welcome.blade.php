<x-app-layout>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif
     
    <section class="container mx-auto grid grid-cols-2 cursor-pointer  gap-6 sm:grid-cols-5">
        @foreach($products as $product)
        <div class="hover:scale-[1.05]">
            <img src="{{ asset('img/product-placeholder.png') }}" alt="product image">
            <div>
                <h3 class="font-bold text-center text-lg">{{$product['name']}}</h3>
            </div>
            <div class="flex justify-between">
                <div class="font-bold"><p>Valor:</p></div><div>R$ {{$product['price']}}</div>
            </div>
        </div>
        @endforeach
    </section>
</x-app-layout>