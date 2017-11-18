<?php 

/**
* 
*/
class AboutController extends BaseController
{
	function about()
	{
	    
	    $info = CMS::where("cate", 'about_info')->first();
	    $feature = CMS::where("cate", 'about_feature')->get();
	    
	    
		$view_data = array(
			'nav_active' => 'about',
		);

		return View::make('web.about', $view_data,compact('info','feature'));
	}

}