<h3>Editar</h3>
<form action="{{ route('species.update', ['specie' => $specie->species_id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome da espécie: </label>
    <input type="text" name="name" value="{{ $specie->name }}" required>
    <input type="submit" value="Editar">
</form>