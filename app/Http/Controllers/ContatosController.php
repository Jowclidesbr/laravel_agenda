<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatos;
use Illuminate\Auth\Events\Validated;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $contatos = Contatos::get();

        return view('contatos.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //



        return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required",
            "telefone_cel" => "required",
        ]);

        Contatos::create([
            "nome" => $request->nome,
            "email" => $request->email,
            "telefone_cel" => $request->telefone_cel,
        ]);

        return redirect()->route('contatos.index')
            ->with('success', 'Contato criado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        //

        $contatos = Contatos::find($id);

        return view('contatos.show', compact('contatos'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        //

        $contatos = Contatos::find($id);

        return view('contatos.edit', compact('contatos'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([

            "nome" => "required",
            "email" => "required",
            "telefone_cel" => "required",

        ]);

         $contatos = Contatos::find($id);

         $contatos->update([
            "nome" => $request->nome,
            "email" => $request->email,
            "telefone_cel" => $request->telefone_cel,
         ]);

         return redirect()->route('contatos.index')
            ->with('success', 'Contato editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        //

        Contatos::find($id)->delete();

        return redirect()->route('contatos.index')
            ->with('delete', 'Contato deletado com sucesso!');

    }
}
