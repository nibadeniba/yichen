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
		$title = CMS::where("cate", 'contact_title')->first();
		$text = CMS::where("cate", 'contact_text')->first();
		$share = CMS::where("cate", 'contact_share')->first();
		$companyinfo = CMS::where('cate','contact_companyinfo')->first();
		$wechatimg = CMS::where('cate','contact_wechatimg')->first();
        
		return View::make('web/contact', compact('nav_active','title','imgs','text','share','companyinfo','wechatimg'));
		
		
// 		$imgs = CMS::where("cate", 'index_img')->get();
// 		$cards = CMS::where("cate", "index_card")->get();
// 		$text = CMS::where("cate", "index_text")->first();
		
// 		$nav_active = 'index';
		
// 		return View::make('web/index', compact('nav_active', "imgs", "cards", "text"));
	}
}