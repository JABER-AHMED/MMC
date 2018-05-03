<?php

namespace App\Models\Deposit\Traits;

use App\User;

class ExpenseRelations
{
     public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
