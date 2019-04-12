<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {

        $rules     = ['captcha' => 'required|captcha'];

        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return redirect(\URL::previous())->withInput($request->all())->withErrors(['errorMessage' => 'Captcha not match!']);
        }

        $model = new Contact();

        $model->status        = Contact::OPEN;
        $model->name          = $request->get('name');
        $model->email         = $request->get('email');
        $model->phone_number  = $request->get('phone');
        $model->message       = $request->get('message');
        $model->save();

        $request->session()->flash('successMessage', 'Your message has been sent. Thank you for contacting us!');

        return redirect('contact');
    }
}