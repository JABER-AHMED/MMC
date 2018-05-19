<?php

namespace App\Http\Controllers\backend\expense;

use Illuminate\Http\Request;
use App\Models\Expense\Expense;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseRequest;
use App\User;

class ExpenseController extends Controller
{
    public $request = null;
    public $model = null;
    public function __construct(Request $request, Expense $expense)
    {
    	$this->request = $request;
    	$this->model = $expense;
    }

    public function index()
    {
    	return view('backend.expense.index');
    }

    public function getUser()
    {
    	return User::all();
    }

    public function save(ExpenseRequest $request)
    {
    	$data = $request->all();

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
                'expense' => $this->model->with('user')->get()
            ]);
        }
        return abort(404);
    }
}
