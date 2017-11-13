<?php 

/**
* 
*/
class IndexController extends BaseController
{
	function index()
	{	
		$imgs = CMS::where("cate", 'index_img')->get();
		$cards = CMS::where("cate", "index_card")->get();
		$text = CMS::where("cate", "index_text")->first();

		$nav_active = 'index';

		return View::make('web/index', compact('nav_active', "imgs", "cards", "text"));
	}
}