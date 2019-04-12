<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Model\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{

    public function index(Request $request)
    {
    	$models = DB::table('contact')
    				->select('contact.*', 'users.name as closed_by')
    				->leftjoin('users', 'users.id', '=', 'contact.closed_by')
    				->orderBy('created_at', 'desc')
    				->get();
        
        return view('backend.contact',[
            'models'   => $models,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $model = Contact::find($id);
        
        return view('backend.contact-add',[
            'title'   => 'Edit Contact',
            'model'   => $model,
        ]);
    }

    public function save(Request $request)
    {
    	$this->validate($request, [
            'note'         => 'required',
        ]);

    	$model = Contact::find($request->get('contactId'));
		$model->updated_at = new \DateTime();
	

        $model->note 	        = $request->get('note');

        if ($request->get('btninprocess') !== null) {
            $model->status         = Contact::INPROCESS;
        } elseif ($request->get('btnclosed') !== null) {
            $model->status = Contact::CLOSED;
            $model->closed_at   = new \DateTime(); 
        } 

        $model->save();
        
        $request->session()->flash('successMessage', 'Contact '.$model->name.' successfully saved');

        return redirect('admin/contact');
    }
}