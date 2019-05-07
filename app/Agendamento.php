<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{

    public function servicos()
    {
        return $this->belongsTo(Servicos::class, 'servicos_id');
    }

    public function profissional()
    {
        return $this->belongsTo(Funcionario::class, "funcionario_id");
    }
}
