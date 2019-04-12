<?php

namespace App\Http\Controllers\Backend;

use App\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(Request $request)
    {
        $model = DB::table('basic_variable')->get();

        return view('backend.basic',[
            'models'   => $model,
        ]);
    }

    public function save(Request $request)
    {
    	DB::beginTransaction();

    	foreach ($request->all() as $key => $value) {
    		if($key != '_token'){
    			DB::table('basic_variable')
		            ->where('variable_name', $key)
		            ->update(['string_contain' => $value, 'text_contain' => $value]);
    		}
    	}

    	DB::commit();

    	return redirect('admin/basic');
    }
}