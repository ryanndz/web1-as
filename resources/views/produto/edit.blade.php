<form action="{{  url('produtos/'.$produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name" value="{{$produto->name}}" required>
    <input type="text" name="price" placeholder="price" value="{{$produto->price}}" required>
    <input type="number" name="quantity" placeholder="quantity" value="{{$produto->quantity}}" required>
    <button type="submit">Create Pokemon</button>
</form>

