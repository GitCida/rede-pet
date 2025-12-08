@extends('layouts.template')
@section('content')
    @vite(['resources/js/app.js'])
    <h3>Cadastrar adotante</h3>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <form action="{{ route('adopters.store') }}" method="post">
        @csrf
        <label for="name">Nome do adotante: </label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="phone_number">Telefone: </label>
        <input type="text" name="phone_number" id="phone" value="{{ old('phone_number') }}" placeholder="(00)00000-0000" required>
        @error('phone_number')
            <p>{{ $message }}</p>
        @enderror

        <label for="address">Endereço: </label>
        <input type="text" name="address" value="{{ old('address') }}" required>
        @error('address')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Cadastrar">
    </form>
    <script>
        const phoneMask = IMask(
            document.getElementById('phone'),
            {
                mask: '(00)00000-0000'
            }
        );
    </script>
@endsection