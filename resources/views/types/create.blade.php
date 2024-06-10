<x-app-layout>
    <div class="card border shadow-lg m-4">
        <div class="card-header bg-gray-800 p-4">
            <h2 class="text-xl text-white font-bold">Cadastro de tipos:</h2>
            </div>
        <div class="card-body flex place-content-center p-4">
         <form action="{{ url('types/update') }}" class="w-2/3" method="POST">
                @csrf
                <div>
                    <label for="name">{{ __('Name') }}:</label>
                    <input id="name" class="w-full block" type="text" name="name" required/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="flex  w-full justify-between mt-4">
                    <div>
                         <x-secondary-link href="{{ url('/types') }}">Voltar</x-secondary-link>
                    </div>
                    <div >
                        <x-primary-button type="submit">Salvar</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>