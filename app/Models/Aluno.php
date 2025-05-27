<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['nome', 'telefone', 'data_nasc', 'turmas_id'];


    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
