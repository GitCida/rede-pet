<h3>Editar</h3>
<form action="{{ route('adoptions.update', ['adoption' => $adoption->adoption_id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="adopter_id">Adotante:</label>
    <select name="adopter_id">
        @foreach ($adopters as $adopter)
            <option value="{{ $adopter->adopter_id }}"
                {{ $adopter->adopter_id == $adopter->adopter_id ? 'selected' : '' }}>
                {{ $adopter->name }}
            </option>
        @endforeach
    </select>

    <label for="animal_id">Adotante:</label>
    <select name="animal_id">
        @foreach ($animals as $animal)
            <option value="{{ $animal->animal_id }}"
                {{ $animal->animal_id == $animal->animal_id ? 'selected' : '' }}>
                {{ $animal->name }}
            </option>
        @endforeach
    </select>

    <label for="reason">Razão: </label>
    <textarea type="text" name="reason" required>
        {{ $adoption->reason }}
    </textarea>
    <label for="observations">Observações: </label>
    <textarea type="text" name="observations" required>
        {{ $adoption->observations }}
    </textarea>
    <label for="status">Status: </label>
    <input type="status" name="status" value="{{ $adoption->status }}" required>
    <input type="submit" value="Editar">
</form>