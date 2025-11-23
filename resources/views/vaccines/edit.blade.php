<h3>Editar</h3>
<form action="{{ route('vaccines.update', ['vaccine' => $vaccine->vaccine_id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome da vacina: </label>
    <input type="text" name="name" value="{{ $vaccine->name }}" required>
    <label for="description">Descrição: </label>
    <textarea type="text" name="description" required>
        {{ $vaccine->description }}
    </textarea>
    <label for="producer">Nome do fabricante: </label>
    <input type="text" name="producer" value="{{ $vaccine->producer }}" required>
    <input type="submit" value="Editar">
</form>