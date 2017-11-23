<?php 

/**
* 
*/
class CaseController extends BaseController
{
	public function index()
	{
		$product_id = Input::get("product_id");
		$products = CMS::where("cate", "product")->get();

		$select = new Cases;
		if ($product_id) {
			$select = $select->where("product_id", $product_id);
		}
		$cases = $select->paginate(16);

		$nav_active="case";

		return View::make('web/case', compact("products", "cases", "nav_active", "product_id"));
	}
}