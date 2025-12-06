<h3>Cadastrar animal</h3>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<form action="{{ route('animals.store') }}" method="post">
    @csrf
    <label for="name">Digite o nome do animal: </label>
    <input type="text" name="name" value="{{ old('name') }}" required>
    @error('name')
        <p>{{ $message }}</p>
    @enderror

    <label for="age">Digite a idade: </label>
    <input type="number" min="0" name="age" value="{{ old('age') }}" required>
    @error('age')
        <p>{{ $message }}</p>
    @enderror

    <label for="size">Selecione o porte: </label>
    <select name="size">
        <option value="Pequeno">Pequeno</option>
        <option value="Médio">Médio</option>
        <option value="Grande">Grande</option>
    </select>

    <label for="gender">Selecione o gênero: </label>
    <select name="gender">
        <option value="Macho">Macho</option>
        <option value="Fêmea">Fêmea</option>
    </select>

    <label for="species_id">Espécie:</label>
    <select name="species_id">
        <option value="">Selecione uma espécie</option>
        @foreach ($species as $sp)
            <option value="{{ $sp->species_id }}">{{ $sp->name }}</option>
        @endforeach
    </select>
    @error('species_id')
        <p>{{ $message }}</p>
    @enderror

    <input type="submit" value="Cadastrar">
</form>