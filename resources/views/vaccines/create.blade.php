<h3>Cadastrar vacina</h3>
<form action="{{ route('vaccines.store') }}" method="post">
    @csrf
    <label for="name">Nome da vacina: </label>
    <input type="text" name="name" required>
    <label for="description">Descrição: </label>
    <textarea type="text" name="description" rows="4" cols="50" class="resize-none border rounded p-2 w-full" required>
    </textarea>
    <label for="producer">Nome do fabricante: </label>
    <input type="text" name="producer" required>
    <input type="submit" value="Cadastrar">
</form>