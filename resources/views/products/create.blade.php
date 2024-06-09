@extends('crud_template')

@section('content')
<div class="card border rounded-lg shadow-lg">
    <div class="card-header bg-gray-200 p-4 rounded-t-lg">
        <h2 class="text-xl font-bold">Cadastro de produtos</h2>
    </div>
    <div class="card-body p-4">
        <div class="row">
            <div class="col">
                @if($errors->any())
                <div class="alert alert-danger bg-red-100 text-red-700 p-4 rounded-lg">
                    <strong class="block font-bold">Problemas com seus dados</strong>
                    <br>
                    @foreach($errors->all() as $error)
                    <li class="ml-4 list-disc">{{ $error }}</li>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        

        <form action="{{ url('products/new') }}" method="POST">
            @csrf
            <div class="mb-4">
                <strong class="block mb-1">Nome:</strong>
                <input class="form-control w-full p-2 border border-gray-300 rounded" name="name" type="text" />
            </div>
            <div class="mb-4">
                <strong class="block mb-1">Descrição:</strong>
                <input class="form-control w-full p-2 border border-gray-300 rounded" name="description" type="textarea" />
            </div>
            <div class="mb-4">
                <strong class="block mb-1">Quantidade:</strong>
                <input class="form-control w-full p-2 border border-gray-300 rounded" name="quantity" type="number" />
            </div>
            <div class="mb-4">
                <strong class="block mb-1">Preço:</strong>
                <input class="form-control w-full p-2 border border-gray-300 rounded" name="price" type="number" />
            </div>
            <div class="mb-4">
                <strong class="block mb-1">Tipo:</strong>
                <select class="form-control w-full p-2 border border-gray-300 rounded" name="type_id">
                    @foreach($types as $type)
                    <option value="{{$type['id']}}">{{$type['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex mt-4">
                <div class="flex-1">
                    <a class="btn btn-secondary bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600" href="{{ url('/products') }}">Voltar</a>
                </div>
                <div class="flex-1 text-right">
                    <button class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection('content')


