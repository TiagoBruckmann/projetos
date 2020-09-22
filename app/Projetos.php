<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model{
    Protected $fillable = [
        'projetos', 'id_cliente', 'vl_acordado', 'vl_recebido', 'dt_pagamento', 'imagem'
    ];
}