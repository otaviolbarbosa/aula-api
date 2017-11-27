<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = [];

    public function produtos() {
    	return $this->belongsToMany('App\Produto');
    }
}
