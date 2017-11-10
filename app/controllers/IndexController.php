<?php 

/**
* 
*/
class IndexController extends BaseController
{
	function index()
	{	
		$view_data = array(
			'nav_active' => 'index',
		);
		return View::make('web/index', $view_data);
	}
}