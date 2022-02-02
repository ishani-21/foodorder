<?php

namespace App\Http\Controllers\Frant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData()
    {
    	return ['name'=>'ishani'];
    }
}
