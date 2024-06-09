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
    <a href="{{url('types/new')}}">
        <button>Adicionar</button>
    </a>
    <ul>
        @foreach($types as $type)
        <li>
            {{$type['name']}} {{$type['price']}}
            <a href="{{ url('types/update', ['id' => $type->id]) }}">Editar</a>
            <a href="{{ url('/types/delete', ['id' => $type->id]) }}">Deletar</a>
        </li>
        @endforeach
    </ul>

    <a href="{{ url('/dashboard') }}">Voltar</a>
</body>
</html>