<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/a', function () {

	return View::make('web.indexo', array('nav_active'=> 'index'));
});

Route::get('/', array('as'=> '/', 'uses'=> 'IndexController@index'));
Route::get('news', array('as'=> 'news', 'uses'=> 'NewsController@news'));
Route::get('news/detail', array('as'=> 'news.detail', 'uses'=> 'NewsController@newsDetail'));

Route::get('about', array('as'=> 'about', 'uses' => 'AboutController@about'));

Route::get('case', array('as' => 'case', 'uses' => 'CaseController@index'));

Route::get('indexo', array('as' => 'indexo', 'uses' => 'IndexoController@indexo'));

Route::get('product', array('as' => 'product', 'uses' => 'ProductController@product'));

Route::get('talent', array('as' => 'talent', 'uses' => 'TalentController@talent'));

Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@contact'));

Route::any('admin/login', array('as' => 'admin.login', 'uses' => 'AdminController@login'));

Route::group(array('prefix'=>'admin/', 'before' => 'login'), function () {
	Route::get('index', array('as' => 'admin.index', 'uses' => 'AdminController@index'));

	// 首页管理
	Route::get('indexImg', array('as' => 'admin.indexImg', 'uses' => 'AdminIndexController@img'));
	Route::post('indexImgAdd', array('as' => 'admin.indexImgAdd', 'uses' => 'AdminIndexController@imgAdd'));
	Route::post('indexImgEdit', array('as' => 'admin.indexImgEdit', 'uses' => 'AdminIndexController@imgEdit'));
	Route::post('indexImgDel', array('as' => 'admin.indexImgDel', 'uses' => 'AdminIndexController@imgDel'));
	Route::get("indexCard", array('as' => 'admin.indexCard', 'uses' => 'AdminIndexController@card'));
	Route::any("indexCardEdit", array('as' => 'admin.indexCardEdit', 'uses' => 'AdminIndexController@cardEdit'));
	Route::any("indexText", array('as' => 'admin.indexText', 'uses' => 'AdminIndexController@text'));

	// 新闻管理
	Route::get('news', array('as'=> 'admin.news', 'uses' => 'AdminNewsController@news'));
	Route::get('news/add', array('as'=> 'admin.news.add', 'uses'=> 'AdminNewsController@newsAdd'));
	Route::get('news/detail', array('as'=> 'admin.news.detail', 'uses'=> 'AdminNewsController@newsDetail'));
	Route::post('news/add/data', array('as'=> 'admin.news.add.data', 'uses'=> 'AdminNewsController@newsAddData'));

	// 产品管理
	Route::get('products', array('as' => 'admin.products', 'uses' => 'AdminProductController@products'));

	// 图片上传
	Route::post('image/upload', array('as'=>'image.upload', 'uses'=> 'ImageUploadController@imageUpload'));
});

