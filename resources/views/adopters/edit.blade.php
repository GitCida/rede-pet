<x-app-layout>
    <h3>Editar</h3>
    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif
    <form action="{{ route('adopters.update', ['adopter' => $adopter->adopter_id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome do adotante: </label>
        <input type="text" name="name" value="{{ $adopter->name }}" required>
        @error('address')
            <p>{{ $message }}</p>
        @enderror

        <label for="phone_number">Telefone: </label>
        <input type="text" name="phone_number" value="{{ $adopter->phone_number }}" required>
        @error('address')
            <p>{{ $message }}</p>
        @enderror

        <label for="address">Endereço: </label>
        <input type="text" name="address" value="{{ $adopter->address }}" required>
        @error('address')
            <p>{{ $message }}</p>
        @enderror
        
        <input type="submit" value="Editar">
    </form>
</x-app-layout>