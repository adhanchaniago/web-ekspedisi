<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Model\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{

    public function index(Request $request)
    {
        $model = Branch::get();
        
        return view('backend.branch',[
            'models'   => $model,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $model = Branch::find($id);
        
        return view('backend.branch-add',[
            'model'   => $model,
        ]);
    }

    public function add(Request $request)
    {
        $model = new Branch();
        
        return view('backend.branch-add',[
            'model'   => $model,
        ]);
    }

    public function save(Request $request)
    {
    	$this->validate($request, [
            'branchCode'   => 'required|unique:branch,branch_code,'.intval($request->get('branchId')).',branch_id',
            'branchName'   => 'required',
            'phoneNumber'  => 'required',
            'email'  	   => 'required',
            'address'  	   => 'required',
            'maps'    	   => 'required',
            ]);

    	if(!empty($request->get('branchId'))){
        	$model = Branch::find($request->get('branchId'));
    	}else{
    		$model = new Branch();
    	}

        $model->branch_code 	= $request->get('branchCode');
        $model->branch_name 	= $request->get('branchName');
        $model->phone_number 	= $request->get('phoneNumber');
        $model->email 			= $request->get('email');
        $model->address 		= $request->get('address');
        $model->maps 			= $request->get('maps');

        $model->save();
        
        $request->session()->flash('successMessage', 'Branch '.$model->branch_name.' successfully saved');

        return redirect('admin/branch');
    }
}