<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use App\Contracts\OrderContract;
use App\Repositories\OrderRepositories;

class OrderController extends Controller
{
    public function __construct(OrderContract $Order)
    {
        $this->Order = $Order;
    }

    public function store(Request $request)
    {
        $data = $this->Order->store($request->all());
    }
	public function show($id)
    {
        $data = $this->Order->show($id);
        return $data;
    }
}
