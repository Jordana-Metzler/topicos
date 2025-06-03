<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::with('turma')->get();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $turmas = Turma::all();
        return view('alunos.create', compact('turmas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Aluno = new Aluno([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'data_nasc' => $request->input('data_nasc'),
            'turmas_id' => $request->input('turmas_id')
        ]);

        $Aluno->save();
        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', ['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id); // ← faltava isso
        $turmas = Turma::all();
        return view('alunos.edit', compact('aluno', 'turmas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'data_nasc' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'turmas_id' => 'required|',
        ]);


        $aluno->update($data);

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno excluído com sucesso!');
    }
}
