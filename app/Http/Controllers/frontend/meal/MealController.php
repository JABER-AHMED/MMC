<?php

namespace App\Http\Controllers\frontend\meal;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MealRequest;
use App\Models\Meal\Meal;

class MealController extends Controller
{
    public $request = null;
    public $model = null;

    public function __construct(Request $request, Meal $meal)
    {
    	$this->request = $request;
    	$this->model = $meal;
    }

    public function index()
    {
    	return view('frontend.meal.index');
    }

    public function save(MealRequest $request)
    {
    	$data = [

    		'user_id' => Auth::user()->id,
    	];

    	$data = array_merge($request->all(), $data);

    	if ($this->model->store($data)) {
            return response()->json([
                'status' => true
            ]);
        }

        return 'not found';
    }

    public function find()
    {
        if ($this->request->wantsJson()) {
            return response()->json([
                'status' => true,
                'meal' => $this->model->all()->where('user_id', Auth::user()->id)
            ]);
        }
        return abort(404);
    }
}
