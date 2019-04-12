<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\News;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {

        $client = new Client();
        $city   = $client->post('https://156.67.216.62/ar-karyati/get-city',[
            'verify'      => false,
            'form_params' => ['apiToken' => '219175a37524e9daf3a094b33cd81939', 'is_active' => 'Y'],
            ]);
        $city = json_decode($city->getBody(), true);

        $news = \DB::table('news')->where('status', News::PUBLISHED)->orderBy('published_at', 'desc')->take(2)->get();
// dd($news);
        return view('home',[
            'startCity'         => $city['start_city'],
            'destinationCity'   => $city['destination_city'],
            'news'              => $news,
        ]);
    }
}