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

	public function productDel()
	{
		$id = Input::get("id");

		if(CMS::where("id", $id)->delete()){
			return $this->ajaxReturn("", "删除成功", 0);
		}
		return $this->ajaxReturn("", "删除失败", 1);
	}
}