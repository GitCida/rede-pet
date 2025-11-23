<h3>Registrar adoção</h3>
<form action="{{ route('adoptions.store') }}" method="post">
    @csrf
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