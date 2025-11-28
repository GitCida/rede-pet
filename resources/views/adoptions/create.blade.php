<h3>Registrar adoção</h3>
<form action="{{ route('adoptions.store') }}" method="post">
    @csrf
    <label for="adopter_id">Adotante: </label>
    <select name="adopter_id" required>
        <option value="">Selecione uma adotante</option>
        @foreach ($adopters as $adopter)
            <option value="{{ $adopter->adopter_id }}">{{ $adopter->name }}</option>
        @endforeach
    </select>
    <label for="animal_id">Animal: </label>
    <select name="animal_id" required>
        <option value="">Selecione uma animal: </option>
        @foreach ($animals as $animal)
            <option value="{{ $animal->animal_id }}">{{ $animal->name }}</option>
        @endforeach
    </select>
    <label for="reason">Razão: </label>
    <textarea type="text" name="reason" required>
    </textarea>
    <label for="observations">Observações: </label>
    <textarea type="text" name="observations" required>
    </textarea>
    <label for="status">Status: </label>
    <input type="status" name="status" required>
    <input type="submit" value="Registrar">
</form>