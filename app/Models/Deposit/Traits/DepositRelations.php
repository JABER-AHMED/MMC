<?php

namespace App\Models\Deposit\Traits;

use App\User;

trait DepositRelations
{
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}