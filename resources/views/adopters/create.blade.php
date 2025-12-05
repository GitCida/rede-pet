<h3>Cadastrar adotante</h3>
@if (session()->has('message'))
    {{ session()->get('message') }}
@endif
<form action="{{ route('adopters.store') }}" method="post">
    @csrf
    <label for="name">Nome do adotante: </label>
    <input type="text" name="name" required>
    <label for="phone_number">Telefone: </label>
    <input type="number" min="0" name="phone_number" required>
    <label for="address">Endereço: </label>
    <input type="text" name="address" required>
    <input type="submit" value="Cadastrar">
</form>