<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipouser extends Model
{
    protected $table = 'tipousers';
    protected $fillable = ['tipo'];
	protected $guarded = ['id'];
}
