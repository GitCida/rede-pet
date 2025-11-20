<h3>Editar evento</h3>
<form action="{{ route('animals.update', ['animal' => $animal->animal_id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome do animal: </label>
    <input type="text" name="name" value="{{ $animal->name }}" required>
    <label for="age">Idade do animal: </label>
    <input type="number" min="0" name="age" value="{{ $animal->age }}" required>
    <label for="size">Porte do animal: </label>
    <input type="text" name="size" value="{{ $animal->size }}" required>
    <label for="gender">Gênero do animal: </label>
    <input type="text" name="name" value="{{ $animal->gender }}" required>
    <input type="submit" value="Editar">
</form>