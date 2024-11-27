<form action="{{  url('fornecedores') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="contact" placeholder="contact" required>
    <button type="submit">Create fornecedor</button>
</form>