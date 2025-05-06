<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::all();
        return view ('turmas.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turmas.create');
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
        ]);

        $Aluno -> save();
        return redireft()->route(alunos.index);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
