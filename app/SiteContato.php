<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillabe = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
