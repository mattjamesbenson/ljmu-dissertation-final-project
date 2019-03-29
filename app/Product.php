<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    protected $fillable = ['id'];
    protected $table = 'products';

    public function basket() {
    	return $this->belongsTo(Basket::class);
    }
}
