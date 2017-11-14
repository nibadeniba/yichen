<?php 

/**
* 
*/
class AdminProductController extends AdminController
{
	
	public function products()
	{
		$title = Input::get("title");

		$select = CMS::where("cate", "product");
		if($title){
			$select = $select->where("title", "like", "%{$title}%");
		}
		$products = $select->paginate(15);

		return View::make('admin.product.products', compact("products", "title"));
	}

	public function productAdd()
	{
		if ($this->isGET()) {
			return View::make("admin.product.add");
		}
		if ($this->isPOST()) {
			$title = Input::get("title");
			$url = rtrim(Input::get("url"), ',');
			$content = Input::get("content");
			$cate = 'product';

			if(CMS::insert(compact("title", "url", "content", "cate"))){
				return $this->ajaxReturn("", "添加成功", 0);
			}
			return $this->ajaxReturn("", "添加失败", 1);
		}

	}

	public function productEdit()
	{
		if ($this->isGET()) {
			$id = Input::get("id");
			$product = CMS::where("id", $id)->first();

			return View::make("admin.product.edit", compact("product"));
		}
		if ($this->isPOST()) {
			$id = Input::get("id");
			$title = Input::get("title");
			$url = rtrim(Input::get("url"), ',');
			$content = Input::get("content");
			$cate = 'product';

			if(CMS::where("id", $id)->update(compact("title", "url", "content", "cate"))){
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}

	public function productDel()
	{
		$id = Input::get("id");

		if(CMS::where("id", $id)->delete()){
			return $this->ajaxReturn("", "删除成功", 0);
		}
		return $this->ajaxReturn("", "删除失败", 1);
	}
}