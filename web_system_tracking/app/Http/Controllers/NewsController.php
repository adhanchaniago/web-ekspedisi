<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Model\News;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $model = News::where('status', News::PUBLISHED)
        			->orderBy('created_at', 'desc')
        			->paginate(1);

        return view('news',[
            'models'   => $model,
        ]);
    }

    public function single(Request $request, $title)
    {
        $model = News::where('title', $title)->first();

        return view('single-news',[
            'model'   => $model,
        ]);
    }
}