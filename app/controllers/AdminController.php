<?php 

/**
* 
*/
class AdminController extends BaseController
{
	public function __construct()
	{
		$action = Request::path();
		View::share('action', $action);	
	}

}