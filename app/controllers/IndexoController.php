<?php 

/**
* 
*/
class IndexoController extends BaseController
{
	function indexo()
	{	
	    $nav_active = 'indexo';
	    $teams = CMS::where("cate", 'indexo_team')->get();
	    
	    return View::make('web/indexo', compact('nav_active','teams'));
	}
}