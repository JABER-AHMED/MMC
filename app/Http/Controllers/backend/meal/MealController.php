<?php

namespace App\Http\Controllers\backend\meal;

use Illuminate\Http\Request;
use App\Models\Meal\Meal;
use App\Http\Controllers\Controller;
use App\Http\Requests\MealRequest;
use App\User;

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
    	return view('backend.meal.index');
    }

    public function getUser()
    {
    	return User::all();
    }

    public function save(Request $request)
    {
        $datas = $request->all();
        foreach ($datas as  $data) {
            if ($this->model->store($data)) {
                continue;
            }else {
                return 'not found';
            }
        }
        return response()->json([
            'status' => true
        ]);
    }

    public function find()
    {
        if ($this->request->wantsJson()) {
            return response()->json([
                'status' => true,
                'meal' => $this->model->with('user')->get()
            ]);
        }
        return abort(404);
    }

    public function edit()
    {
        if ($this->request->wantsJson()) {
            return response()->json([
                'status' => true,
                'meal' => $this->model->find($this->request->id)
            ]);
        }
        return abort(404);
    }
}