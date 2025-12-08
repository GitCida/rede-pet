<x-app-layout>
    <a href="{{ route('vaccines.create') }}">Cadastrar vacina</a>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Fabricante</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vaccines as $vaccine)
            <tr>
                <td>{{ $vaccine->vaccine_id }}</td>
                <td>{{ $vaccine->name }}</td>
                <td>{{ $vaccine->producer }}</td>
                <td>
                    <a href="{{ route('vaccines.edit', $vaccine->vaccine_id) }}">Editar</a> | 
                </td>
                <td>
                    <form action="{{ route('vaccines.destroy', $vaccine->vaccine_id) }}" method="post">
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