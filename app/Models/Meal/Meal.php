<?php

namespace App\Models\Meal;

use App\Models\BaseModel\BaseModel;
use App\Models\Advert\Traits\MealRelations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends BaseModel
{
     use MealRelations, SoftDeletes;
}
