<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidades = Unidade::all();
        return view ('unidades.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Unidade = new Unidade([
            'nome' => $request->input('nome')
        ]);

        $Unidade -> save();
        return redirect()->route('unidades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $unidade = Unidade::findOrFail($id);
        return view('unidades.show', ['unidade' => $unidade]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unidade = Unidade::findOrFail($id);
        return view('unidades.edit', compact('unidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unidade = Unidade::findOrFail($id);
        $data = $request->validate([
            'nome'      => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);
        
        
        $unidade->update($data);

        return redirect()
            ->route('unidades.index')
            ->with('success', 'Unidade atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unidade = Unidade::findOrFail($id);
        
        $unidade->delete();

        return redirect()
            ->route('unidades.index')
            ->with('success', 'Unidade excluída com sucesso!');
    }
}
