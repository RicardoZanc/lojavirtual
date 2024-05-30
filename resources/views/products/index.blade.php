<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h3 class="text-center">Lista de Produtos</h3>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif
    <a href="{{url('products/new')}}">
        <button>Adicionar</button>
    </a>
    <ul>
        @foreach($products as $product)
        <li>
            {{$product['name']}} {{$product['price']}}
            <a href="{{ url('products/update', ['id' => $product->id]) }}">Editar</a>
            <a href="{{ url('/products/delete', ['id' => $product->id]) }}">Deletar</a>
        </li>
        @endforeach
    </ul>
</body>
</html>