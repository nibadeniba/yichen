<?php 

/**
* 
*/
class AdminBottomController extends AdminController
{
	
	public function bottom()
	{
		if ($this->isGET()) {
			$bottom = CMS::where("cate", "bottom")->first();

			return View::make('admin.bottom.bottom', compact("bottom"));
		}
		if ($this->isPOST()) {
			$id= Input::get("id");
			$content = Input::get("content");

			if(CMS::where("id", $id)->update(compact("content"))) {
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}
}