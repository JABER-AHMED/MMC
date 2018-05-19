<?php

namespace App\Models\BaseModel;


use App\Models\BaseModel\Traits\BaseModelMethods;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use BaseModelMethods;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}