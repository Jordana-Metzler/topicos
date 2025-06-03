<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Unidade;
use App\Models\Professor;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::with(['unidade', 'professor'])->get();
        return view('turmas.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidades = Unidade::all();
        $professores = Professor::all();

        return view('turmas.create', compact('unidades', 'professores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Turma = new Turma([
            'dias_aula' => $request->input('dias_aula'),
            'nome' => $request->input('nome'),
            'horario' => $request->input('horario'),
            'unidades_id' => $request->input('unidades_id'),
            'professores_id' => $request->input('professores_id'),
        ]);

        $Turma->save();
        return redirect()->route('turmas.index');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $turma = Turma::findOrFail($id);
        return view('turmas.show', ['turma' => $turma]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turma = Turma::findOrFail($id);
        $unidades = Unidade::all();
        $professores = Professor::all();

        return view('turmas.create', compact('unidades', 'professores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turma = Turma::findOrFail($id);

        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'dias_aula' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'unidades_id' => 'required',
            'professores_id' => 'required',
        ]);


        $turma->update($data);

        return redirect()
            ->route('turmas.index')
            ->with('success', 'Turma atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::findOrFail($id);

        $turma->delete();

        return redirect()
            ->route('turmas.index')
            ->with('success', 'Turma excluída com sucesso!');
    }
}
