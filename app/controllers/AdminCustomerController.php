<?php 

/**
* 
*/
class AdminCustomerController extends AdminController
{
	
	function customer()
	{

		$customer_type = Input::get('customer_type', '');
		$customer_model = new Customer();

		$select = $customer_model->select(array('*'));
		$customer_type !=='' && $select = $select->where('customer_type', $customer_type);
		$customer = $select->paginate(15);

		$customer->appends(array('customer_type'=> $customer_type));
		

		$view_data = array(
			'customer_type' => $customer_type,
			'customer' => $customer,
		);
		return View::make('admin.customer.customer', $view_data);
	}

	function customerDetail()
	{
		$id = Input::get('id');
	
		$customer = Customer::find($id);
	
		if (!$customer) {
			return Redirect::to('/admin/customer');
		}

		$view_data = array(
			'customer' => $customer
		);
		return View::make('admin.customer.detail', $view_data);

	}

	function customerAdd()
	{
		$view_data = array();
		return View::make('admin.customer.add', $view_data);
	}

	function customerAddData()
	{
		$customer_name = Input::get('customer_name');
		$customer_type = Input::get('customer_type');

		$act = Input::get('act', 'add');

		try {
			if (!$customer_name) {
				throw new Exception("岗位名称不能为空");
			}


			$insert_data = array(
				'customer_name' => $customer_name,
				'customer_type' => $customer_type,
			);

			switch ($act) {
				case 'add':
					$customer_id = Customer::insertGetId($insert_data);
					if (!$customer_id) {
						throw new Exception("添加失败请重试！");
					}
					
					break;
				case 'update':
					$id = Input::get('id');

					if (!$id) {
						throw new Exception("ID必要参数错误");
					}
					customer::where('id', $id)->update($insert_data);
					break;
				default:
					throw new Exception("参数错误");
					break;
			}
			

			return Response::json(array('status'=> 1, 'message'=> '保存成功!'));

		} catch (Exception $e) {
			return Response::json(array('status'=> 0, 'message'=> $e->getMessage()));
		}
	}
	
	
	public function customerDel()
	{
	    $id = Input::get("id");
	    if(Customer::where("id", $id)->delete()){
	        return $this->ajaxReturn("", "删除成功", 0);
	    }
	    return $this->ajaxReturn("", "删除失败", 1);
	}
}