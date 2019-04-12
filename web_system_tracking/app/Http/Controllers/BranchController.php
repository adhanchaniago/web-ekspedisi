<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Model\Branch;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function index(Request $request, $branchCode)
    {
        $model = Branch::where('branch_code', $branchCode)->first();
        
        // dd($model);

        return view('branch',[
            'model'   => $model,
        ]);
    }
}