<form action="{{  url('fornecedores/'.$fornecedor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name" value="{{$fornecedor->name}}" required>
    <input type="text" name="contact" placeholder="contact" value="{{$fornecedor->price}}" required>
    <button type="submit">Create fornecedor</button>
</form>

