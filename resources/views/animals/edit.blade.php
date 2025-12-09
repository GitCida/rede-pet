@extends('layouts.template')
@section('content')

<div class="px-6 py-6">

    @if (session()->has('message'))
        <div class="mb-4 px-4 py-3 rounded-lg bg-green-100 text-green-700 border border-green-300">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-xl border border-gray-200 p-6 mx-auto max-w-xl">

        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3">Editar animal</h2>

        <form action="{{ route('animals.update', ['animal' => $animal->animal_id]) }}" method="post" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-gray-700">Nome do animal</label>
                <input type="text" name="name" value="{{ $animal->name }}"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]"
                    required>
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="age" class="block text-gray-700">Idade</label>
                <input type="number" min="0" name="age" value="{{ $animal->age }}"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]"
                    required>
                @error('age')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="size" class="block text-gray-700">Porte</label>
                <select name="size"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]">
                    <option value="Pequeno" {{ $animal->size == 'Pequeno' ? 'selected' : '' }}>Pequeno</option>
                    <option value="Médio" {{ $animal->size == 'Médio' ? 'selected' : '' }}>Médio</option>
                    <option value="Grande" {{ $animal->size == 'Grande' ? 'selected' : '' }}>Grande</option>
                </select>
            </div>

            <div>
                <label for="gender" class="block text-gray-700">Gênero</label>
                <select name="gender"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]">
                    <option value="Macho" {{ $animal->gender == 'Macho' ? 'selected' : '' }}>Macho</option>
                    <option value="Fêmea" {{ $animal->gender == 'Fêmea' ? 'selected' : '' }}>Fêmea</option>
                </select>
            </div>

            <div>
                <label for="species_id" class="block text-gray-700">Espécie</label>
                <select name="species_id"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]">
                    @foreach ($species as $sp)
                        <option value="{{ $sp->species_id }}"
                            {{ $animal->species_id == $sp->species_id ? 'selected' : '' }}>
                            {{ $sp->name }}
                        </option>
                    @endforeach
                </select>
                @error('species_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-[#5EC2B7] hover:bg-teal-700 text-white font-medium py-2.5 rounded-lg transition">
                Editar
            </button>

        </form>

    </div>

</div>

@endsection
