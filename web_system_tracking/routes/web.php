<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['globalVariable']], function () {
	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');
	Route::any('/tracking', 'TrackingController@index');
	Route::any('/price', 'PriceController@index');
	Route::get('/branch/{branchCode}', 'BranchController@index');
	Route::any('/news', 'NewsController@index');
	Route::any('/single-news/{title}', 'NewsController@single');
	Route::any('/contact', 'ContactController@index');
	Route::post('/contact/send-message', 'ContactController@sendMessage');
});

//==================================
Route::any('/admin', function(){
	if(\Auth::user()){
		return redirect('/admin/dashboard');
	}else{
		return view('backend.login');
	}
})->name('admin-login');

Route::any('/admin/login', function(){
	if(\Auth::user()){
		return redirect('/admin/dashboard');
	}else{
		return view('backend.login');
	}
})->name('admin-login');

//==================================
Route::group(['prefix' => 'admin'], function() {
	Route::middleware(['auth'])->group(function () {
	    Route::group(['prefix' => 'dashboard'], function() {
	        Route::any('', 'Backend\DashboardController@index');
	    });
	    Route::group(['prefix' => 'basic'], function() {
	        Route::any('', 'Backend\BasicController@index');
	        Route::post('save', 'Backend\BasicController@save');
	    });
	    Route::group(['prefix' => 'home'], function() {
	        Route::any('', 'Backend\HomeController@index');
	        Route::post('save', 'Backend\HomeController@save');
	    });
	    Route::group(['prefix' => 'branch'], function() {
	        Route::any('', 'Backend\BranchController@index');
	        Route::get('add', 'Backend\BranchController@add');
	        Route::get('edit/{id}', 'Backend\BranchController@edit');
	        Route::post('save', 'Backend\BranchController@save');
	    });
	    Route::group(['prefix' => 'news'], function() {
	        Route::any('', 'Backend\NewsController@index');
	        Route::get('add', 'Backend\NewsController@add');
	        Route::get('edit/{id}', 'Backend\NewsController@edit');
	        Route::post('save', 'Backend\NewsController@save');
	    });
	    Route::group(['prefix' => 'user'], function() {
	        Route::any('', 'Backend\UserController@index');
	        Route::post('save', 'Backend\UserController@save');
	    });
	    Route::group(['prefix' => 'contact'], function() {
	        Route::any('', 'Backend\ContactController@index');
	        Route::get('edit/{id}', 'Backend\ContactController@edit');
	        Route::post('save', 'Backend\ContactController@save');
	    });
	});
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


