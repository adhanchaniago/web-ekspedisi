<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $request)
    {
        $filters = $resi = $history = [];

        $client = new Client();

        $filters = $request->all();
        if ($request->isMethod('post')) {
            $resi   = $client->post('https://156.67.216.62/ar-karyati/get-tracking-resi',[
                'verify'      => false,
                'form_params' => [
                        'apiToken'          => '219175a37524e9daf3a094b33cd81939', 
                        'resiNumber'        => $request->input('resiNumber'),
                    ],
                ]);
            $resi = json_decode($resi->getBody(), true);
            if ($resi['status'] == 'failed') {
                return redirect(url('tracking'))->withInput($request->all())->withErrors(['trackingError' => $resi['message']]);
            }
        }

        return view('tracking',[
            'filters'           => $filters,
            'resi'              => !empty($resi) ? $resi['resi'] : [],        
            'data'              => !empty($resi) ? $resi['data'] : [],        
            'history'           => !empty($resi) ? $resi['history'] : [],        
        ]);
    }
}