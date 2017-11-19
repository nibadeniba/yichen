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

Route::get('customer', array('as' => 'customer', 'uses' => 'CustomerController@customer'));

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
	Route::any('productAdd', array('as' => 'admin.productAdd', 'uses' => 'AdminProductController@productAdd'));
	Route::any('productEdit', array('as' => 'admin.productEdit', 'uses' => 'AdminProductController@productEdit'));
	Route::post('productDel', array('as' => 'admin.productDel', 'uses' => 'AdminProductController@productDel'));

	// 案例管理
	Route::get('cases', array('as' => 'admin.cases', 'uses' => 'AdminCaseController@cases'));
	Route::any('caseAdd', array('as' => 'admin.caseAdd', 'uses' => 'AdminCaseController@caseAdd'));
	Route::any('caseEdit', array('as' => 'admin.caseEdit', 'uses' => 'AdminCaseController@caseEdit'));
	Route::post('caseDel', array('as' => 'admin.caseDel', 'uses' => 'AdminCaseController@caseDel'));

	// 图片上传
	Route::post('image/upload', array('as'=>'image.upload', 'uses'=> 'ImageUploadController@imageUpload'));
	
	// 岗位管理
	Route::get('talent', array('as'=> 'admin.talent', 'uses' => 'AdminTalentController@talent'));
	Route::get('talent/add', array('as'=> 'admin.talent.add', 'uses'=> 'AdminTalentController@talentAdd'));
	Route::get('talent/detail', array('as'=> 'admin.talent.detail', 'uses'=> 'AdminTalentController@talentDetail'));
	Route::post('talent/add/data', array('as'=> 'admin.talent.add.data', 'uses'=> 'AdminTalentController@talentAddData'));
	
	// 客户管理
	Route::get('customer', array('as'=> 'admin.customer', 'uses' => 'AdminCustomerController@customer'));
	Route::get('customer/add', array('as'=> 'admin.customer.add', 'uses'=> 'AdminCustomerController@customerAdd'));
	Route::get('customer/detail', array('as'=> 'admin.customer.detail', 'uses'=> 'AdminCustomerController@customerDetail'));
	Route::post('customer/add/data', array('as'=> 'admin.customer.add.data', 'uses'=> 'AdminCustomerController@customerAddData'));

	// 底部
	Route::any('bottom', array('as' => 'admin.bottom', 'uses' => 'AdminBottomController@bottom'));

	// 在线
	Route::any('line', array('as' => 'admin.line', 'uses' => 'AdminLineController@line'));

	// 地图
	Route::any('map', array('as' => 'admin.map', 'uses' => 'AdminMapController@map'));

	Route::any('server', array('as' => 'admin.server', 'uses' => 'AdminServerController@server'));
});

