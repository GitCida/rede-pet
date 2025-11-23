<h3>Editar</h3>
<form action="{{ route('adoptions.update', ['adoption' => $adoption->adoption_id]) }}" method="post">
    @csrf
    @method('PUT')
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