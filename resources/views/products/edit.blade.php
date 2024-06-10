<x-app-layout>
    <div class="card border shadow-lg m-4">
        <div class="card-header bg-gray-800 p-4">
            <h2 class="text-xl text-white font-bold">Edição do produto: {{ $product['name'] }}</h2>
            </div>
        <div class="card-body flex place-content-center p-4">
         <form action="{{ url('products/update') }}" class="w-2/3" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $product['id'] }}">
                <div>
                    <label for="name">{{ __('Name') }}:</label>
                    <input id="name" class="w-full block" type="text" name="name" value="{{ $product['name'] }}" required/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <label for="description">{{ __('Description') }}:</label>
                    <input id="description" class="w-full block" type="text" name="description" value="{{ $product['description'] }}" required/>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
                <div>
                    <label for="quantity">{{ __('Quantity') }}:</label>
                    <input id="quantity" class="w-full block" type="text" name="quantity" value="{{ $product['quantity'] }}" required/>
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                </div>
                <div>
                    <label for="price">{{ __('Price') }}:</label>
                    <input id="price" class="w-full block" type="text" name="price" value="{{ $product['price'] }}" required/>
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                <div>
                    <label for="type_id">{{__('Type')}}</label>
                    <select id="type_id" class="w-full block" name="type_id">
                        @foreach ($types as $type)
                        <option {{$product['type_id'] == $type['id'] ? "selected" : ""}} value="{{$type['id']}}">{{$type['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex  w-full justify-between mt-4">
                    <div class="">
                        <!-- <a class="btn btn-secondary bg-gray-500 text-white px-4 py-2.5 rounded hover:bg-gray-600" href="{{ url('/products') }}">Voltar</a> -->
                         <x-secondary-link href="{{ url('/products') }}">Voltar</x-secondary-link>
                    </div>
                    <div >
                        <x-primary-button type="submit">Salvar</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
