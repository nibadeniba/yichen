<?php 

/**
* 
*/
class AdminAboutController extends AdminController
{
	
	public function about()
	{
		if ($this->isGET()) {
			$abouts = CMS::where("cate", "about_feature")->get();
			$info = CMS::where("cate", "about_info")->first();

			return View::make('admin.about.about', compact("abouts", "info"));
		}
		if ($this->isPOST()) {
			$id= Input::get("id");
			$title = Input::get("title");
			$url = Input::get("url");
			$content = Input::get("content");

			if(CMS::where("id", $id)->update(compact("title", "url", "content"))) {
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}
}