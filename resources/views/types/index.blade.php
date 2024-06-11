<x-app-layout>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif
    <a href="{{url('types/new')}}">
        <button>Adicionar</button>
    </a>
    <div class="card border  w-2/3 shadow-lg m-4">
            <div class="card-header bg-gray-800 p-4">
            <h2 class="text-xl text-white font-bold">Tipos</h2>
            </div>
            <div class="card-body conatiner grid grid-cols-4">

            @foreach($types as $type)
                    <div class="col-span-2">
                    <h3 class="text-lg font-bold px-5">{{$type['name']}}</h3>
                </div>
                <div>
                    <a href="{{ url('types/update', ['id' => $type->id]) }}">Editar</a>
                </div>
                <div>
                    <a href="{{ url('/types/delete', ['id' => $type->id]) }}">Deletar</a>
                </div>
            @endforeach
            </div>
    </div>       

    <a href="{{ url('/dashboard') }}">Voltar</a>
</x-app-layout>