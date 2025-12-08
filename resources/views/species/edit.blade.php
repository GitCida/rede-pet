<x-app-layout>
    <h3>Editar</h3>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <form action="{{ route('species.update', ['specie' => $specie->species_id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome da espécie: </label>
        <input type="text" name="name" value="{{ $specie->name }}" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        
        <input type="submit" value="Editar">
    </form>
</x-app-layout>