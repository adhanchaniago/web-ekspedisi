<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        
        return view('backend.user',[
            // 'model'   => $model,
        ]);
    }
}