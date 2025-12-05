
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <a href="{{ route('adopters.create') }}">Cadastrar adotante</a>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adopters as $adopter)
            <tr>
                <td>{{ $adopter->adopter_id }}</td>
                <td>{{ $adopter->name }}</td>
                <td>{{ $adopter->phone_number }}</td>
                <td>{{ $adopter->address }}</td>
                <td>
                    <a href="{{ route('adopters.edit', $adopter->adopter_id) }}">Editar</a> | 
                </td>
                <td>
                    <form action="{{ route('adopters.destroy', $adopter->adopter_id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Deletar" onclick="return confirm('Tem certeza que deseja deletar?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>