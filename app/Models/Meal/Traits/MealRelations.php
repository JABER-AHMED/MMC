<?php

namespace App\Models\Meal\Traits;

use App\User;

trait MealRelations
{
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}