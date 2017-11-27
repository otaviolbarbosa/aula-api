<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['nome', 'quantidade'];

    public function pedidos() {
    	return $this->belongsToMany('App\Pedido');
    }
}
