@extends('layouts.template')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Editar Espécie</h3>

    @if (session()->has('message'))
        <p class="mb-3 text-green-600 font-medium">{{ session()->get('message') }}</p>
    @endif

    <form action="{{ route('species.update', ['specie' => $specie->species_id]) }}" method="post" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-gray-700">Nome da espécie:</label>
            <input 
                type="text" 
                name="name" 
                value="{{ $specie->name }}" 
                required
                class="w-full mt-1 border border-gray-300 rounded-lg p-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]"
            >
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button 
            type="submit" 
            class="w-full bg-[#5EC2B7] hover:bg-teal-700 text-white font-semibold py-2 rounded-lg transition"
        >
            Editar
        </button>
    </form>
</div>
@endsection
