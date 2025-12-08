@extends('layouts.template')
@section('content')
    <h3>Editar</h3>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <form action="{{ route('vaccines.update', ['vaccine' => $vaccine->vaccine_id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome da vacina: </label>
        <input type="text" name="name" value="{{ $vaccine->name }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="producer">Nome do fabricante: </label>
        <input type="text" name="producer" value="{{ $vaccine->producer }}" required>
        @error('producer')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Editar">
    </form>
@endsection