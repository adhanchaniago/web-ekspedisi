<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $request)
    {
        $filters = $price = $history = [];

        $client = new Client();
        $city   = $client->post('https://156.67.216.62/ar-karyati/get-city',[
            'verify'      => false,
            'form_params' => ['apiToken' => '219175a37524e9daf3a094b33cd81939', 'is_active' => 'Y'],
            ]);
        $city = json_decode($city->getBody(), true);

        if ($request->isMethod('post')) {
            $filters = $request->all();
            $price   = $client->post('https://156.67.216.62/ar-karyati/get-calculate-price',[
                'verify'      => false,
                'form_params' => [
                        'apiToken'          => '219175a37524e9daf3a094b33cd81939', 
                        'startCity'         => $request->input('startCity'),
                        'destinationCity'   => $request->input('destinationCity'),
                        'weight'            => $request->input('weight'),
                        'long'              => $request->input('long'),
                        'width'             => $request->input('width'),
                        'height'            => $request->input('height'),
                    ],
                ]);
            $price = json_decode($price->getBody(), true);
            if ($price['status'] == 'failed') {
                return redirect(url('price'))->withInput($request->all())->withErrors(['priceError' => $price['message']]);
            }
        }
        // dd($price);
        return view('price',[
            'filters'           => $filters,
            'startCity'         => $city['start_city'],
            'destinationCity'   => $city['destination_city'],
            'price'             => $price,        
        ]);
    }
}