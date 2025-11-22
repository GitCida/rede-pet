<h3>Cadastrar espécie</h3>
<form action="{{ route('species.store') }}" method="post">
    @csrf
    <label for="name">Digite o nome da espécie: </label>
    <input type="text" name="name" required>
    <input type="submit" value="Cadastrar">
</form>