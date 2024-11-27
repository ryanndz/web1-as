<form action="{{  url('categorias/'.$categorias->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="description" placeholder="description" value="{{$categorias->description}}" required>
    <button type="submit">Create Produto</button>
</form>