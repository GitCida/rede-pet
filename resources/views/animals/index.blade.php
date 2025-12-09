@extends('layouts.template')

@section('content')

<div class="px-6 py-6">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Animais</h2>

        <a href="{{ route('animals.create') }}" class="bg-[#5EC2B7] hover:bg-[#2D6A6A] text-white font-medium px-5 py-2.5 rounded-lg transition">
            Cadastrar animal
        </a>
    </div>

    @if (session()->has('message'))
        <div class="mb-4 px-4 py-3 rounded-lg bg-green-100 text-green-700 border border-green-300">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-xl border border-gray-200 overflow-hidden">
        <table class="w-full border-collapse text-left">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">ID</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Nome</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Idade</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Porte</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Gênero</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Espécie</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($animals as $animal)
                    <tr class="border-b border-b-gray-300 hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-700">{{ $animal->animal_id }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $animal->name }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $animal->age }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $animal->size }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $animal->gender }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $animal->species->name ?? 'Sem espécie' }}</td>

                        <td class="py-3 px-4">
                            <div class="flex items-center gap-3">

                                <a href="{{ route('animals.edit', $animal->animal_id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    Editar
                                </a>

                                <form action="{{ route('animals.destroy', $animal->animal_id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar?')">
                                    @method('DELETE')
                                    @csrf
                                    
                                    <button type="submit"
                                        class="text-red-600 hover:text-red-800 font-medium">
                                        Deletar
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection
