<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = ['product_id', 'user_id', 'order_placed'];
    protected $table = 'baskets';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getProduct()
    {
    	return Product::where('id', $this->product_id)->first();
    }

    public function getPrice()
    {
    	return $this->getProduct()->price;
    }
}
