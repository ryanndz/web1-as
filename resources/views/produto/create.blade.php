<form action="{{ url('produtos') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="price" placeholder="price" required>
    <input type="number" name="quantity" placeholder="quantity" required>
    <div >
        <label for="categoria_id">Coach</label>
            <select name="categoria_id" id="categoria_id" required>
                <option value="">Select a coach</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->description }}</option>
                @endforeach
            </select>
        </div>
    <button type="submit">Create Produto</button>
</form>