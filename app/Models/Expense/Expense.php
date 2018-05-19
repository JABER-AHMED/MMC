<?php

namespace App\Models\Expense;

use App\Models\BaseModel\BaseModel;
use App\Models\Expense\Traits\ExpenseRelations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends BaseModel
{
     use ExpenseRelations, SoftDeletes;
}
