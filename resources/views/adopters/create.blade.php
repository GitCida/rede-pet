<h3>Cadastrar adotante</h3>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<form action="{{ route('adopters.store') }}" method="post">
    @csrf
    <label for="name">Nome do adotante: </label>
    <input type="text" name="name">
    @error('name')
        <p>{{ $message }}</p>
    @enderror

    <label for="phone_number">Telefone: </label>
    <input type="text" name="phone_number">
    @error('phone_number')
        <p>{{ $message }}</p>
    @enderror

    <label for="address">Endereço: </label>
    <input type="text" name="address">
    @error('address')
        <p>{{ $message }}</p>
    @enderror

    <input type="submit" value="Cadastrar">
</form>