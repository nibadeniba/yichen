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

	public function isGET()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			return true;
		}
		return false;
	}

	public function isPOST()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			return true;
		}
		return false;
	}

	public function index()
	{
		return View::make('admin.index');
	}

	public function login()
	{
		if ($this->isGET()) {
			return View::make('admin.admin.login');
		}
		if ($this->isPOST()) {
			$mobile = Input::get('mobile');
			$pwd = Input::get('pwd');

			if (User::isTrue($mobile, $pwd)) {
				return Redirect::to('admin/index');
			}
			return View::make('admin.admin.login');
		}
	}

}