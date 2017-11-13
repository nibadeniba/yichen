<?php 

/**
* 
*/
class TalentController extends BaseController
{
	function talent()
	{	
		$nav_active = 'talent';

		return View::make('web/talent', compact('nav_active'));
	}
}