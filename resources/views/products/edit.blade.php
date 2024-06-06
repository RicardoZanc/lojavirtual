<x-app-layout>
        <div class="px-6 mx-auto max-w-7xl">
                <form action="{{ url('products/update') }}" method="POST">
                @csrf
                <!-- campo oculto passando o ID como parâmetro no request -->
                <input type="hidden" name="id" value="{{ $product['id'] }}">
                <label>Nome:</label><br>
                <input name="name" type="text" value="{{ $product['name'] }}" /><br>

                <!-- Nome -->

                <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                
                <label>Descrição:</label><br>
                <input name="description" type="textarea" value="{{
                $product['description'] }}"/><br>
                <label>Quantidade:</label><br>
                <input name="quantity" type="number" value="{{ $product['quantity']
                }}"/><br>
                <label>Preço:</label><br>
                <input name="price" type="number" value="{{ $product['price'] }}"/><br>
                <label>Tipo:</label><br>
                <select name="type_id">
                        @foreach ($types as $type)
                        <option {{$product['type_id'] == $type['id'] ? "selected" : ""}} value="{{$type['id']}}">{{$type['name']}}</option>
                        @endforeach
                </select>
                <input type="submit" value="Salvar" />
                </form>
        </div>
</x-app-layout>