<?php

namespace App;

use Illuminate\Database\Eloquet\Model;

class Projeto extends Model{
    Protected $filleable = [
        'projeto', 'cliente', 'valor acordado', 'valor recebido', 'data de pagamento', 'imagem'
    ];
}