<?php 

/**
* 
*/
class AdminMapController extends AdminController
{
	
	public function map()
	{
		if ($this->isGET()) {
			$map = CMS::where("cate", "contact_map")->first();

			return View::make('admin.map.map', compact("map"));
		}
		if ($this->isPOST()) {
			$id= Input::get("id");
			$title = Input::get("title");
			$url = Input::get("url");

			if(CMS::where("id", $id)->update(compact("title", "url"))) {
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}
}