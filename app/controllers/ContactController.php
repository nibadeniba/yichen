<?php 

/**
* 
*/
class ContactController extends BaseController
{
	function contact()
	{	

		$nav_active = 'contact';
		$imgs = CMS::where("cate", 'contact_map')->first();
		
		return View::make('web/contact', compact(
		    'nav_active',
		    'imgs'
		    ));
		
		
// 		$imgs = CMS::where("cate", 'index_img')->get();
// 		$cards = CMS::where("cate", "index_card")->get();
// 		$text = CMS::where("cate", "index_text")->first();
		
// 		$nav_active = 'index';
		
// 		return View::make('web/index', compact('nav_active', "imgs", "cards", "text"));
	}
}