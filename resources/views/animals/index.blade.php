<x-app-layout>
    <a href="{{ route('animals.create') }}">Cadastrar animal</a>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Porte</th>
                <th>Gênero</th>
                <th>Espécie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
            <tr>
                <td>{{ $animal->animal_id }}</td>
                <td>{{ $animal->name }}</td>
                <td>{{ $animal->age }}</td>
                <td>{{ $animal->size }}</td>
                <td>{{ $animal->gender }}</td>
                <td>{{ $animal->species->name ?? 'Sem espécie' }}</td>
                <td>
                    <a href="{{ route('animals.edit', $animal->animal_id) }}">Editar</a> | 
                </td>
                <td>
                    <form action="{{ route('animals.destroy', $animal->animal_id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Deletar" onclick="return confirm('Tem certeza que deseja deletar?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>