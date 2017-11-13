<?php 

/**
* 
*/
class AboutController extends BaseController
{
	function about()
	{
		$view_data = array(
			'nav_active' => 'about',
		);

		return View::make('web.about', $view_data);
	}

}