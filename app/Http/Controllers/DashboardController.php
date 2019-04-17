<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\Meal\Meal;
Use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('backend.dashboard.index');
    }
    public function getData() {
    	$user = User::select('name', 'id')->whereRole(0)->get();
    	$meals = Meal::select('meal', 'date', 'user_id')->orderBy('user_id', 'asc')->get();
    	return response()->json([
    		'status' => true,
    		'user' => $user,
    		'meals' => $meals
    	]);
    }
}
