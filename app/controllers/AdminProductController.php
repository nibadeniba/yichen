<?php 

/**
* 
*/
class AdminProductController extends AdminController
{
	
	public function products()
	{
		$products = CMS::where("cate", "product")->paginate(15);
		
		return View::make('admin.product.products', compact("products"));

	}

	public function img()
	{
		$imgs = CMS::where("cate","index_img")->get();
		$view_data = array(
			'imgs' => $imgs,
		);

		return View::make('admin.index.imgs', $view_data);
	}

	public function imgAdd()
	{
		$url = Input::get("url");
		$cate = 'index_img';

		if (CMS::insert(compact("url", "cate"))) {
			return $this->ajaxReturn("", "上传成功", 0);
		}
		return $this->ajaxReturn("", "上传失败", 1);
	}

	public function imgEdit()
	{
		$url = Input::get("url");
		$id = Input::get("id");

		if (CMS::where("id", $id)->update(compact("url"))) {
			return $this->ajaxReturn("", "修改成功", 0);
		}
		return $this->ajaxReturn("", "修改失败", 1);
	} 

	public function imgDel()
	{
		$id = Input::get("id");

		if (CMS::where("id", $id)->delete()) {
			return $this->ajaxReturn("", "删除成功", 0);
		}
		return $this->ajaxReturn("", "删除失败", 1);
	}

	public function card()
	{
		$cards = CMS::where("cate","index_card")->get();
		$view_data = array(
			'cards' => $cards,
		);

		return View::make('admin.index.cards', $view_data);
	}

	public function cardEdit()
	{
		if ($this->isGET()) {
			$id = Input::get("id");
			$card = CMS::where("id", $id)->first();

			return View::make('admin.index.card_edit', compact("card"));
		}
		if ($this->isPOST()) {
			$id = Input::get("id");
			$title = Input::get("title");
			$url = Input::get("url");
			$content = Input::get("content");

			if (CMS::where("id", $id)->update(compact("title", "url", "content"))) {
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}

	public function text()
	{
		if ($this->isGET()) {
			$text = CMS::where("cate", "index_text")->first();

			return View::make("admin.index.text", compact("text"));
		}
		if ($this->isPOST()) {
			$id = Input::get("id");
			$content = Input::get("content");
			$title = Input::get("title");

			if (CMS::where("id", $id)->update(compact("content", "title"))) {
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}
}