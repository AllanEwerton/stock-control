<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Exibe uma lista do recurso.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('login.categoria', compact('categorias'));

    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {
        return view('login.categoria-create');
    }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     */
    public function store(Request $request)
    {
        $categoria =  $request->validate([
            'nome' => 'required',
        ]
        ,[
            'nome.required' => 'O campo nome é obrigatório',
        ]);
        Categoria::create($categoria);
        return redirect()->route('categorias');
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
