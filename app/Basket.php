<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = ['product_id', 'user_id', 'order_placed'];
    protected $table = 'baskets';

    public function user()
    {
    	$this->belongsTo(User::class);
    }

    public function getProduct()
    {
    	$this->hasMany(Product::class);
    }
}
