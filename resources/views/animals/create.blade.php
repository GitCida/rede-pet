<h3>Cadastrar animal</h3>
<form action="{{ route('animals.store') }}" method="post">
    @csrf
    <label for="name">Digite o nome do animal: </label>
    <input type="text" name="name" required>
    <label for="age">Digite a idade: </label>
    <input type="number" min="0" name="age" required>
    <label for="size">Selecione o porte: </label>
    <select name="size" required>
        <option value="Pequeno">Pequeno</option>
        <option value="Médio">Médio</option>
        <option value="Grande">Grande</option>
    </select>
    <label for="gender">Selecione o gênero: </label>
    <select name="gender" required>
        <option value="Macho">Macho</option>
        <option value="Fêmea">Fêmea</option>
    </select>
    <label for="species_id">Espécie:</label>
    <select name="species_id" required>
        <option value="">Selecione uma espécie</option>
        @foreach ($species as $sp)
            <option value="{{ $sp->species_id }}">{{ $sp->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Cadastrar">
</form>