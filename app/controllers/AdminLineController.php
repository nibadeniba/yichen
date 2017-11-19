<?php 

/**
* 
*/
class AdminLineController extends AdminController
{
	
	public function line()
	{
		if ($this->isGET()) {
			$line = CMS::where("cate", "line")->first();

			return View::make('admin.line.line', compact("line"));
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