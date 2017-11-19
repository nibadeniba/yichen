<?php 

/**
* 
*/
class TalentController extends BaseController
{
	function talent()
	{	
		$nav_active = 'talent';

		$talents = Talent::where("is_show", '1')->get();
		
		return View::make('web/talent', compact('nav_active','talents'));
	}
}