@extends('layouts.template')
@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
    <h3 class="text-2xl font-semibold text-gray-800 border-b pb-3 mb-6">Cadastrar animal</h3>

    @if (session()->has('message'))
        <div class="mb-4 text-sm text-green-600 font-medium">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('animals.store') }}" method="post" class="space-y-5">
        @csrf

        <div>
            <label class="block text-gray-700 mb-1">Digite o nome do animal:</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-600 focus:ring-teal-600"
                   required>
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Digite a idade:</label>
            <input type="number" min="0" name="age" value="{{ old('age') }}"
                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-600 focus:ring-teal-600"
                   required>
            @error('age')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Selecione o porte:</label>
            <select name="size"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-600 focus:ring-teal-600">
                <option value="Pequeno">Pequeno</option>
                <option value="Médio">Médio</option>
                <option value="Grande">Grande</option>
            </select>
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Selecione o gênero:</label>
            <select name="gender"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-600 focus:ring-teal-600">
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select>
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Espécie:</label>
            <select name="species_id"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-600 focus:ring-teal-600">
                <option value="">Selecione uma espécie</option>
                @foreach ($species as $sp)
                    <option value="{{ $sp->species_id }}">{{ $sp->name }}</option>
                @endforeach
            </select>
            @error('species_id')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
                class="w-full bg-[#5EC2B7] hover:bg-teal-700 text-white font-semibold px-4 py-2 rounded-md transition">
            Cadastrar
        </button>
    </form>
</div>
@endsection
