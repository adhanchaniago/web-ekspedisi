<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Model\News;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(Request $request)
    {
    	$models = DB::table('news')
    				->select('news.*', 'users.name')
    				->join('users', 'users.id', '=', 'news.created_by')
    				->get();
        
        return view('backend.news',[
            'models'   => $models,
        ]);
    }

    public function add(Request $request)
    {
        $model = new News();
        
        return view('backend.news-add',[
            'title'   => 'Add News',
            'model'   => $model,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $model = News::find($id);
        
        return view('backend.news-add',[
            'title'   => 'Edit News',
            'model'   => $model,
        ]);
    }

    public function save(Request $request)
    {
    	$this->validate($request, [
            'title'        => 'required|unique:news,title,'.intval($request->get('newsId')).',news_id',
            'textContain'  => 'required',
        ]);

    	if(!empty($request->get('newsId'))){
        	$model = News::find($request->get('newsId'));
    		$model->updated_by = \Auth::user()->id;
    		$model->updated_at = new \DateTime();
    	}else{
    		$model = new News();
    		$model->created_by = \Auth::user()->id;
    	}

        $model->title 	        = $request->get('title');
        $model->text_contain    = $request->get('textContain');

        if ($request->get('btnpublish') !== null) {
            $model->status         = News::PUBLISHED;
            $model->published_at   = new \DateTime(); 
        } elseif ($request->get('btnunpublish') !== null) {
            $model->status = News::DRAFT;
        } elseif ($request->get('btndelete') !== null) {
            $model->status = News::DELETED;
        } elseif (empty($model->status)) {
            $model->status = News::DRAFT;
        }

        $model->save();
        
        $request->session()->flash('successMessage', 'News '.$model->title.' successfully saved');

        return redirect('admin/news');
    }
}