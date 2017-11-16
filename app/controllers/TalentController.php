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
		$title = CMS::where("cate", 'talent_title')->first();
		
		return View::make('web/talent', compact('nav_active','title','talents'));
	}
}