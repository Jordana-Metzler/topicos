<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    protected $fillable = ['nome', 'dias_aula', 'horario', 'unidades_id', 'professores_id'];
    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'unidades_id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professores_id');
    }

}

