<?php

namespace App;

use App\User;
use App\TrackingTime;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getBasket()
    {
        return Basket::where('user_id', $this->id)->get();
    }

    public function firstExperimentResults()
    {
        return TrackingTime::where('user_id', $this->id)
            ->where('experiment', 'first')->get();
    }

    public function secondExperimentResults()
    {
        return TrackingTime::where('user_id', $this->id)
            ->where('experiment', 'second')->get();
    }
}
