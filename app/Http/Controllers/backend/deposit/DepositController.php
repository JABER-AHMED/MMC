<?php

namespace App\Http\Controllers\backend\deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Deposit\Deposit;
use App\Http\Requests\DepositRequest;
use App\User;

class DepositController extends Controller
{
    public $request = null;
    public $model = null;

    public function __construct(Request $request, Deposit $deposit)
    {
    	$this->request = $request;
    	$this->model = $deposit;
    }

    public function index()
    {
    	return view('backend.deposit.index');
    }

    public function getUser()
    {
    	return User::all();
    }

    public function save(DepositRequest $request)
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
                'deposit' => $this->model->with('user')->get()
            ]);
        }
        return abort(404);
    }

    public function edit()
    {
        if ($this->request->wantsJson()) {
            return response()->json([
                'status' => true,
                'deposit' => $this->model->find($this->request->id)
            ]);
        }
        return abort(404);
    }
}
