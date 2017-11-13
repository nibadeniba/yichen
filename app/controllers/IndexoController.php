<?php 

/**
* 
*/
class IndexoController extends BaseController
{
	function indexo()
	{	
		$view_data = array(
			'nav_active' => 'indexo',
		);
		return View::make('web/indexo', $view_data);
	}
}