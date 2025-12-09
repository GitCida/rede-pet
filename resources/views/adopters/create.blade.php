@extends('layouts.template')
@section('content')

<div class="px-6 py-6">

    <div class="max-w-xl mx-auto bg-white shadow-md rounded-xl p-8 border border-gray-200">

        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3">
            Cadastrar adotante
        </h2>

        @if (session()->has('message'))
            <div class="mb-4 px-4 py-3 rounded-lg bg-green-100 text-green-700 border border-green-300 text-sm font-medium">
                {{ session()->get('message') }}
            </div>
        @endif

        <form action="{{ route('adopters.store') }}" method="post" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 mb-1">Nome do adotante</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-[#5EC2B7] focus:ring-[#5EC2B7]"
                    required>

                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-gray-700 mb-1">Telefone</label>
                <input type="text" name="phone_number" id="phone" value="{{ old('phone_number') }}"
                    placeholder="(00)00000-0000"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-[#5EC2B7] focus:ring-[#5EC2B7]"
                    required>

                @error('phone_number')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="address" class="block text-gray-700 mb-1">Endereço</label>
                <input type="text" name="address" value="{{ old('address') }}"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-[#5EC2B7] focus:ring-[#5EC2B7]"
                    required>

                @error('address')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-[#5EC2B7] hover:bg-teal-700 text-white font-semibold py-2.5 rounded-lg transition">
                Cadastrar
            </button>

        </form>

    </div>
</div>

<script>
    IMask(document.getElementById('phone'), {
        mask: '(00)00000-0000'
    });
</script>

@endsection
