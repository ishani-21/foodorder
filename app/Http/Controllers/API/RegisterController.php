<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use App\Contracts\RegisterContract;
use App\Repositories\RegisterRepositories;

class RegisterController extends Controller
{
    public function __construct(RegisterContract $Register)
    {
        $this->Register = $Register;
    }

    protected function create(Request $data)
    {
        return $this->Register->create($data->all());
    }

    public function show($id=null)
    {
        return $this->Register->show($id);
    }
    
    public function update(Request $request, $id)
    {
        return $this->Register->update($request->all(),$id);
    }
}
