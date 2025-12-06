
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <a href="{{ route('adoptions.create') }}">registrar adoção</a>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Animal</th>
                <th>Adotante</th>
                <th>Razão</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
            <tr>
                <td>{{ $adoption->adoption_id }}</td>
                <td>{{ $adoption->animals->name }}</td>
                <td>{{ $adoption->adopters->name }}</td>
                <td>{{ $adoption->reason }}</td>
                <td>{{ $adoption->status }}</td>
                <td>
                    <a href="{{ route('adoptions.edit', $adoption->adoption_id) }}">Editar</a> | 
                </td>
                <td>
                    <form action="{{ route('adoptions.destroy', $adoption->adoption_id) }}" method="post">
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