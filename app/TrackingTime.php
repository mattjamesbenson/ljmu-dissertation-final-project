<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingTime extends Model
{
	protected $fillable = ['user_id', 'page_from', 'page_to', 'timestamp_1', 'timestamp_2', 'experiment'];
    protected $table = 'tracking_time';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
