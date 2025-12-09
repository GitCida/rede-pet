@extends('layouts.template')
@section('content')

<div class="px-6 py-6">

    
    @if (session()->has('message'))
        <div class="mb-4 px-4 py-3 rounded-lg bg-green-100 text-green-700 border border-green-300">
            {{ session()->get('message') }}
        </div>
        @endif
        
    <div class="bg-white shadow-md rounded-xl border border-gray-200 p-6 mx-auto max-w-xl">
            
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3">Editar adoção</h2>
        <form action="{{ route('adoptions.update', ['adoption' => $adoption->adoption_id]) }}" method="post" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="adopter_id" class="block  text-gray-700">Adotante</label>
                <select name="adopter_id"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]">
                    @foreach ($adopters as $adopter)
                        <option value="{{ $adopter->adopter_id }}"
                            {{ $adopter->adopter_id == $adoption->adopter_id ? 'selected' : '' }}>
                            {{ $adopter->name }}
                        </option>
                    @endforeach
                </select>

                @error('adopter_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="animal_id" class="block text-gray-700">Animal</label>
                <select name="animal_id"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]">
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->animal_id }}"
                            {{ $animal->animal_id == $adoption->animal_id ? 'selected' : '' }}>
                            {{ $animal->name }}
                        </option>
                    @endforeach
                </select>

                @error('animal_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="reason" class="block text-gray-700">Razão</label>
                <textarea name="reason"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 h-28 resize-none focus:ring-[#5EC2B7] focus:border-[#5EC2B7]"
                    required>{{ old('reason', $adoption->reason) }}</textarea>

                @error('reason')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="status" class="block  text-gray-700">Status</label>
                <select name="status"
                    class="mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-[#5EC2B7] focus:border-[#5EC2B7]">
                    <option value="Pendente" {{ $adoption->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                    <option value="Aprovada" {{ $adoption->status == 'Aprovada' ? 'selected' : '' }}>Aprovada</option>
                    <option value="Completada" {{ $adoption->status == 'Completada' ? 'selected' : '' }}>Completada</option>
                    <option value="Rejeitada" {{ $adoption->status == 'Rejeitada' ? 'selected' : '' }}>Rejeitada</option>
                    <option value="Cancelada" {{ $adoption->status == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-[#5EC2B7] hover:bg-teal-700 text-white font-medium py-2.5 rounded-lg transition">
                Editar
            </button>

        </form>

    </div>

</div>

@endsection
