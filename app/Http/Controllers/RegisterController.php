<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\http\Controllers\Controller;

class RegisterController extends Controller
{
   public function store(request $request)
   {
   	  $name =$request->input('name');
   	  $email= $request->input('email');
   	  $pass= $request->input('pass');

   	  // print_r($request->path());
   }
}
