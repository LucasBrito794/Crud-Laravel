<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        Categoria::create([
            'name' => $request->nome,
        ]);
        return redirect('/categoria');
    }

    public function show()
    {
        $categorias = Categoria::get();

        return view('welcome' , compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'name' => $request->nome,
        ]);
        
        return redirect('/categoria');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect('/categoria');
    }
}
