<?php 

/**
* 
*/
class ContactController extends BaseController
{
	function contact()
	{	

		$nav_active = 'contact';

		return View::make('web/contact', compact('nav_active'));
	}
}