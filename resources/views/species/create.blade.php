@extends('layouts.template')
@section('content')
    <h3>Cadastrar espécie</h3>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <form action="{{ route('species.store') }}" method="post">
        @csrf
        <label for="name">Digite o nome da espécie: </label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Cadastrar">
    </form>
@endsection