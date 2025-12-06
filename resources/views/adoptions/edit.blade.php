<h3>Editar</h3>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
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
    <label for="status">Status: </label>
    <select name="status" required>
        <option value="Pendente" {{ $adoption->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
        <option value="Aprovada" {{ $adoption->status == 'Aprovada' ? 'selected' : '' }}>Aprovada</option>
        <option value="Completada" {{ $adoption->status == 'Completada' ? 'selected' : '' }}>Completada</option>
        <option value="Rejeitada" {{ $adoption->status == 'Rejeitada' ? 'selected' : '' }}>Rejeitada</option>
        <option value="Cancelada" {{ $adoption->status == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
    </select>
    <input type="submit" value="Editar">
</form>