<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index',compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:pessoas',
            'sexo' => 'required',


        ]);
        Pessoa::create($request->all());
        return redirect()->route('pessoas.index')->with('Sucess','Pessoa cadastrada com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
  $pessoa = Pessoa::findOrFail($id); // garante que $pessoa exista
    return view('pessoas.show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
          $pessoa = Pessoa::findOrFail($id); // garante que $pessoa exista
    return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Request $request, $id) {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());
        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso!');
    }

    public function destroy($id) {
        Pessoa::findOrFail($id)->delete();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa excluída com sucesso!');
    }
}
