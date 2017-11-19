<?php 

/**
* 
*/
class AdminServerController extends AdminController
{
	
	public function server()
	{
		if ($this->isGET()) {
			$servers = CMS::where("cate", "indexo_team")->get();
			$pool = CMS::where("cate", "indexo_pool")->first();

			return View::make('admin.server.server', compact("servers", "pool"));
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