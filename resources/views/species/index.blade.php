@extends('layouts.template')
@section('content')
    <a href="{{ route('species.create') }}">Cadastrar espécie</a>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($species as $specie)
            <tr>
                <td>{{ $specie->species_id }}</td>
                <td>{{ $specie->name }}</td>
                <td>
                    <a href="{{ route('species.edit', $specie->species_id) }}">Editar</a> | 
                </td>
                <td>
                    <form action="{{ route('species.destroy', $specie->species_id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Deletar" onclick="return confirm('Tem certeza que deseja deletar?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection