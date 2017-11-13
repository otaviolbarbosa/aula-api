<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
	use SoftDeletes;
    //
    public $fillable = ['nome', 'endereco', 'telefone'];
}
