<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
{
   $categorias = Categoria::all();
   return view('categoria.index', compact('categorias'));
}

public function create()
{
   return view('categoria.create');
}

public function store(Request $request)
{
   Categoria::create($request->all());
   return redirect('categorias')->with('success', 'Categoria created successfully.');
}

public function edit($id)
{
   $categorias = Categoria::findOrFail($id);
   return view('categoria.edit', compact('categorias'));
   
}

public function update(Request $request, $id)
{
   $categorias = Categoria::findOrFail($id);
   $categorias->update($request->all());
   return redirect('categorias')->with('success', 'Categoria updated successfully.');
}

public function destroy($id)
{
   $categoria = Categoria::findOrFail($id);
   $categoria->delete();
   return redirect('categorias')->with('categoria', 'Categoria deleted successfully.');
}
}
