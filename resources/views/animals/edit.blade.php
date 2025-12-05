<h3>Editar</h3>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<form action="{{ route('animals.update', ['animal' => $animal->animal_id]) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Nome do animal: </label>
    <input type="text" name="name" value="{{ $animal->name }}" required>
    <label for="age">Idade do animal: </label>
    <input type="number" min="0" name="age" value="{{ $animal->age }}" required>
    <label for="size">Porte do animal: </label>
    <select name="size" required>
        <option value="Pequeno" {{ $animal->size == 'Pequeno' ? 'selected' : '' }}>Pequeno</option>
        <option value="Médio" {{ $animal->size == 'Médio' ? 'selected' : '' }}>Médio</option>
        <option value="Grande" {{ $animal->size == 'Grande' ? 'selected' : '' }}>Grande</option>
    </select>
    <label for="gender">Gênero:</label>
    <select name="gender" required>
        <option value="Macho" {{ $animal->gender == 'Macho' ? 'selected' : '' }}>Macho</option>
        <option value="Fêmea" {{ $animal->gender == 'Fêmea' ? 'selected' : '' }}>Fêmea</option>
    </select>
    <label for="species_id">Espécie:</label>
    <select name="species_id">
        @foreach ($species as $sp)
            <option value="{{ $sp->species_id }}"
                {{ $animal->species_id == $sp->species_id ? 'selected' : '' }}>
                {{ $sp->name }}
            </option>
        @endforeach
    </select>
    <input type="submit" value="Editar">
</form>