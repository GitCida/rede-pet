@extends('layouts.template')
@section('content')
    <h3>Cadastrar vacina</h3>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <form action="{{ route('vaccines.store') }}" method="post">
        @csrf
        <label for="name">Nome da vacina: </label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="producer">Nome do fabricante: </label>
        <input type="text" name="producer" value="{{ old('producer') }}" required>
        @error('producer')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Cadastrar">
    </form>
@endsection