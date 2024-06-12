<x-app-layout>
    @if ($message = Session::get('success'))
        <script>window.alert('{{$message}}')</script>
    @endif
    <section class="w-full flex justify-center mt-4">
        <div class="w-2/3">
            <div class="w-full flex justify-end">
                <x-primary-link href="{{url('types/new')}}">Adicionar</x-primary-link>
            </div>
            <div class="card border shadow-lg mt-2">
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
                        <a onclick="return confirm(`Deseja deletar o tipo {{$type['name']}}?`)" href="{{ url('/types/delete', ['id' => $type->id]) }}">Deletar</a>
                    </div>
                    
                @endforeach
                </div>
            </div>
        </div>       
    </section>
</x-app-layout>