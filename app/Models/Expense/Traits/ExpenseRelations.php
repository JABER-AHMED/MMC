<?php

namespace App\Models\Expense\Traits;

use App\User;

trait ExpenseRelations
{
     public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
