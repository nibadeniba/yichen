<?php 

/**
* 
*/
class TalentController extends BaseController
{
	function talent()
	{	
		$nav_active = 'talent';

		$recruits = Recruit::where("is_show", '1')->get();
		$title = CMS::where("cate", 'recruit_title')->first();
		
		return View::make('web/talent', compact('nav_active','title','recruits'));
	}
}