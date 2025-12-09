@extends('layouts.template')
@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
    <h3 class="text-2xl font-semibold text-gray-800 border-b pb-3 mb-6">Cadastrar vacina</h3>

    @if (session()->has('message'))
        <div class="mb-4 text-sm text-green-600 font-medium">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('vaccines.store') }}" method="post" class="space-y-5">
        @csrf

        <div>
            <label class="block text-gray-700 mb-1">Nome da vacina:</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-700 focus:ring-teal-700"
                   required>
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 mb-1">Nome do fabricante:</label>
            <input type="text" name="producer" value="{{ old('producer') }}" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:border-teal-700 focus:ring-teal-700" required>
            @error('producer')
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
