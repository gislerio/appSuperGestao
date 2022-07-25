<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function itemDetalhe()
    {
        //produto tem 1 produto detalhe fk produto_id
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }
}
