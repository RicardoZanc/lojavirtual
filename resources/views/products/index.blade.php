<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h3>Lista de Produtos</h3>
    <a href="{{url('products/new')}}">
        <button>Adicionar</button>
    </a>
    <ul>
        @foreach($products as $product)
        <li>{{$product['name']}} {{$product['price']}}</li>
        @endforeach
    </ul>
</body>
</html>