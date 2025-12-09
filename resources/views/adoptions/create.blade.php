@extends('layouts.template')
@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
    <h3 class="text-2xl font-semibold text-gray-800 border-b pb-3 mb-6">Registrar adoção</h3>

    @if (session()->has('message'))
        <div class="mb-4 text-sm text-green-600 font-medium">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('adoptions.store') }}" method="post" class="space-y-5">
        @csrf

        <div>
            <label class="block text-gray-700 mb-1">Adotante:</label>
            <select name="adopter_id"
                class="w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:border-teal-700 focus:ring-teal-700">
                <option value="">Selecione uma adotante</option>
                @foreach ($adopters as $adopter)
                    <option value="{{ $adopter->adopter_id }}">{{ $adopter->name }}</option>
                @endforeach
            </select>
            @error('adopter_id')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Animal:</label>
            <select name="animal_id"
                class="w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:border-teal-700 focus:ring-teal-700">
                <option value="">Selecione um animal</option>
                @foreach ($animals as $animal)
                    <option value="{{ $animal->animal_id }}">{{ $animal->name }}</option>
                @endforeach
            </select>
            @error('animal_id')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Razão:</label>
            <textarea name="reason" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 h-28 resize-none focus:border-teal-700 focus:ring-teal-700">{{ old('reason') }}</textarea>
            @error('reason')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Status:</label>
            <select name="status"
                class="w-full border border-gray-300 rounded-md px-3 py-2 bg-white focus:border-teal-700 focus:ring-teal-700">
                <option value="Pendente">Pendente</option>
                <option value="Aprovada">Aprovada</option>
                <option value="Completada">Completada</option>
                <option value="Rejeitada">Rejeitada</option>
                <option value="Cancelada">Cancelada</option>
            </select>
        </div>

        <button type="submit"
                class="w-full bg-[#5EC2B7] hover:bg-teal-700 text-white font-semibold px-4 py-2 rounded-md transition">
            Registrar
        </button>
    </form>
</div>
@endsection
