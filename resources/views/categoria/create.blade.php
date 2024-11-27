<form action="{{ url('categorias') }}" method="POST">
    @csrf
    <input type="text" name="description" placeholder="description" required>
    <button type="submit">Create Produto</button>
</form>