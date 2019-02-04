<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id'];
    protected $table = 'products';

    public function basket() {
    	$this->belongsTo(Basket::class);
    }
}
