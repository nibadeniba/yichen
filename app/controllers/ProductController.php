<?php 

/**
* 
*/
class ProductController extends BaseController
{
	function product()
	{	
		$nav_active = 'product';
		$products = CMS::where("cate", 'product')->get();

		return View::make('web/product', compact("nav_active", "products"));
	}
}