<?php

namespace App;

use App\Models\Deposit\Deposit;
use App\Models\Expense\Expense;
use App\Models\Meal\Meal;
use Illuminate\Notifications\Notifiable;
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

    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'user_id', 'id');
    }

    public function meals()
    {
        return $this->hasMany(Meal::class, 'user_id', 'id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'user_id', 'id');
    }
}
