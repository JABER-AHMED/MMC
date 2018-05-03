<?php

namespace App\Models\Deposit;

use App\Models\BaseModel\BaseModel;
use App\Models\Advert\Traits\DepositRelations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends BaseModel
{
     use DepositRelations, SoftDeletes;
}
