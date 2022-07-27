<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    public function produtos()
    {
        return $this->hasMany('App\item', 'fornecedor_id', 'id');
        //return $this->hasMany('App\item');
    }
}
