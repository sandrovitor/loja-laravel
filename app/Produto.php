<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Variavel contendo os campo a serem adicionados via Mass Assignment.
    protected $fillable = [
        'id',
        'nome',
        'descricao'
    ];
}
