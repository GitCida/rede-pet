<h3>Cadastrar animal</h3>
<form action="{{ route('animals.store') }}" method="post">
    @csrf
    <label for="name">Digite o nome do animal: </label>
    <input type="text" name="name" required>
    <label for="age">Digite a idade: </label>
    <input type="number" min="0" name="age" required>
    <label for="size">Digite o porte: </label>
    <input type="text" name="size" required>
    <label for="gender">Digite o gênero: </label>
    <input type="text" name="gender" required>
    <input type="submit" value="Cadastrar">
</form>