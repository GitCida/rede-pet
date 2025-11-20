
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <a href="">Criar evento</a>
</body>
</html>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Porte</th>
            <th>Gender</th>
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
            <td>
                <a href="">Editar</a> | 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>