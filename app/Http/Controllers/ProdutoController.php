<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index()
{
   $produtos = Produto::all();
   return view('produto.index', compact('produtos'));
}

public function create()
{   
    $categorias = Categoria::all();
   return view('produto.create', compact('categorias'));
}

public function store(Request $request)
{
   Produto::create($request->all());
   return redirect('produtos')->with('success', 'Produto created successfully.');
}

public function edit($id)
{  $categorias = Categoria::all(); 
   $produto = Produto::findOrFail($id);
   return view('produto.edit', compact('produto','categorias'));
}

public function update(Request $request, $id)
{
   $produto = Produto::findOrFail($id);
   $produto->update($request->all());
   return redirect('produtos')->with('success', 'Produto updated successfully.');
}

public function destroy($id)
{
   $produto = Produto::findOrFail($id);
   $produto->delete();
   return redirect('produtos')->with('produto', 'Produto deleted successfully.');
}
}
