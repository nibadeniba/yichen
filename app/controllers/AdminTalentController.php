<?php 

/**
* 
*/
class AdminTalentController extends AdminController
{
	
	function talent()
	{

		$is_show = Input::get('is_show', '');
		$talent_model = new Talent();

		$select = $talent_model->select(array('*'));
		$is_show !=='' && $select = $select->where('is_show', $is_show);
		$talent = $select->paginate(15);

		$talent->appends(array('is_show'=> $is_show));

		$view_data = array(
			'is_show' => $is_show,
			'talent' => $talent,
		);
		return View::make('admin.talent.talent', $view_data);
	}

	function talentDetail()
	{
		$id = Input::get('id');
	
		$talent = Talent::find($id);
	
		if (!$talent) {
			return Redirect::to('/admin/talent');
		}

		$view_data = array(
			'talent' => $talent
		);
		return View::make('admin.talent.detail', $view_data);

	}

	function talentAdd()
	{
		$view_data = array();
		return View::make('admin.talent.add', $view_data);
	}

	function talentAddData()
	{
		$talent_name = Input::get('talent_name');
		$requirement = Input::get('requirement');
		$is_show = Input::get('is_show');

		$act = Input::get('act', 'add');

		try {
			if (!$talent_name) {
				throw new Exception("岗位名称不能为空");
			}


			$insert_data = array(
				'talent_name' => $talent_name,
				'requirement' => $requirement,
				'is_show' => $is_show,
			);

			switch ($act) {
				case 'add':
					$talent_id = Talent::insertGetId($insert_data);
					if (!$talent_id) {
						throw new Exception("添加失败请重试！");
					}
					
					break;
				case 'update':
					$id = Input::get('id');

					if (!$id) {
						throw new Exception("ID必要参数错误");
					}
					Talent::where('id', $id)->update($insert_data);
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

	public function talentDel()
	{
	    $id = Input::get("id");
	    if(Talent::where("id", $id)->delete()){
	        return $this->ajaxReturn("", "删除成功", 0);
	    }
	    return $this->ajaxReturn("", "删除失败", 1);
	}
}