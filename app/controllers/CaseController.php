<?php 

/**
* 
*/
class CaseController extends BaseController
{
	public function index()
	{
		$view_data = array(
			'nav_active' => 'case',
		);
		return View::make('web/case', $view_data);
	}
}