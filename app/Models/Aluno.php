<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['nome', 'telefone', 'data_nasc', 'unidades_id', 'turmas_id', 'professores_id'];
}
