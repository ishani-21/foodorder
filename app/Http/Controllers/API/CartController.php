<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use App\Contracts\CartContract;
use App\Repositories\CartRepositories;


class CartController extends Controller
{
    public function __construct(CartContract $Cart)
    {
        $this->Cart = $Cart;
    }
    public function index()
    {
        // dd("kdfn");
        $cart = $this->Cart->index();
        return $cart;
    }
	public function store(Request $request)
    {
        $data = $this->Cart->store($request->all());
        return $data;
    }
	public function update(Request $request, $id)
    {
        $data = $this->Cart->update($request->all(),$id);
        return $data;

    }
	public function destroy($id)
    {
        $cart = $this->Cart->destroy($id);
    }
}