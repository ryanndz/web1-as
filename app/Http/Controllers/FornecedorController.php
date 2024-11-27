<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
{
   $fornecedor = Fornecedor::all();
   return view('fornecedor.index', compact('fornecedor'));
}

public function create()
{
   return view('fornecedor.create');
}

public function store(Request $request)
{
   Fornecedor::create($request->all());
   return redirect('fornecedores')->with('success', 'Fornecedor created successfully.');
}

public function edit($id)
{
   $fornecedor = Fornecedor::findOrFail($id);
   return view('fornecedor.edit', compact('fornecedor'));
}

public function update(Request $request, $id)
{
   $fornecedor = Fornecedor::findOrFail($id);
   $fornecedor->update($request->all());
   return redirect('fornecedores')->with('success', 'Fornecedor updated successfully.');
}

public function destroy($id)
{
   $fornecedor = Fornecedor::findOrFail($id);
   $fornecedor->delete();
   return redirect('fornecedores')->with('success', 'Fornecedor deleted successfully.');
}

}
