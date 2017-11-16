<?php 

/**
* 
*/
class AdminCaseController extends AdminController
{
	
	public function cases()
	{
		$product_id = Input::get("product_id");
		$products = CMS::where("cate", "product")->get();

		$select = new Cases;
		if ($product_id) {
			$select = $select->where("product_id", $product_id);
		}
		$cases = $select
			->join("cms", "cms.id", "=", "cases.product_id")
			->select("cases.id as id", "name", "img", "title")
			->paginate(15);

		return View::make('admin.case.cases', compact("product_id", "products", "cases"));
	}

	public function caseAdd()
	{
		if ($this->isGET()) {
			$products = CMS::where("cate", "product")->get();

			return View::make("admin.case.add", compact("products"));
		}
		if ($this->isPOST()) {
			$name = Input::get("name");
			$img = rtrim(Input::get("img"), ',');
			$product_id = Input::get("product_id");

			if(Cases::insert(compact("name", "img", "product_id"))){
				return $this->ajaxReturn("", "添加成功", 0);
			}
			return $this->ajaxReturn("", "添加失败", 1);
		}

	}

	public function caseEdit()
	{
		if ($this->isGET()) {
			$id = Input::get("id");

			$case = Cases::where("id", $id)->first();
			$products = CMS::where("cate", "product")->get();

			return View::make("admin.case.edit", compact("case", "products"));
		}
		if ($this->isPOST()) {
			$id = Input::get("id");
			$name = Input::get("name");
			$img = rtrim(Input::get("img"), ',');
			$product_id = Input::get("product_id");

			if(Cases::where("id", $id)->update(compact("name", "img", "product_id"))){
				return $this->ajaxReturn("", "修改成功", 0);
			}
			return $this->ajaxReturn("", "修改失败", 1);
		}
	}

	public function caseDel()
	{
		$id = Input::get("id");

		if(Cases::where("id", $id)->delete()){
			return $this->ajaxReturn("", "删除成功", 0);
		}
		return $this->ajaxReturn("", "删除失败", 1);
	}
}