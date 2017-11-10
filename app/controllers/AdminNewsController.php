<?php 

/**
* 
*/
class AdminNewsController extends AdminController
{
	
	function news()
	{

		$is_show = Input::get('is_show', '');
		$news_model = new News();

		$select = $news_model->select(array('*'));
		$is_show !=='' && $select = $select->where('is_show', $is_show);

		$news = $select->paginate(15);

		$news->appends(array('is_show'=> $is_show));

		$view_data = array(
			'is_show' => $is_show,
			'news' => $news,
		);
		return View::make('admin.news.news', $view_data);
	}

	function newsDetail()
	{
		$id = Input::get('id');
	
		$news = News::find($id);
	
		if (!$news) {
			return Redirect::to('/admin/news');
		}

		$view_data = array(
			'news' => $news
		);
		return View::make('admin.news.detail', $view_data);

	}

	function newsAdd()
	{
		$view_data = array();
		return View::make('admin.news.add', $view_data);
	}

	function newsAddData()
	{
		$news_title = Input::get('news_title');
		$news_upper_title = Input::get('news_upper_title');
		$news_image = Input::get('news_image');
		$clicks = Input::get('clicks');
		$is_show = Input::get('is_show');
		$content = Input::get('content');

		$act = Input::get('act', 'add');

		try {
			if (!$news_title) {
				throw new Exception("新闻标题不能为空");
			}

			if (!$news_upper_title) {
				$news_upper_title = $news_title;
			}

			if (!is_numeric($clicks) || $clicks < 0) {
				throw new Exception("点击量必须是非负数字");
			}

			$insert_data = array(
				'news_title' => $news_title,
				'news_upper_title' => $news_upper_title,
				'news_image' => $news_image,
				'clicks' => $clicks,
				'is_show' => $is_show,
				'created_at' => date('Y-m-d H:i:s'),
			);

			switch ($act) {
				case 'add':
					$news_id = News::insertGetId($insert_data);

					if (!$news_id) {
						throw new Exception("添加失败请重试！");
					}

					NewsContent::insert(array(
						'news_id'=> $news_id,
						'content'=> $content,
						'created_at' => date('Y-m-d H:i:s'),
					));
					break;
				case 'update':
					$id = Input::get('id');

					if (!$id) {
						throw new Exception("ID必要参数错误");
					}
					unset($insert_data['created_at']);
					News::where('id', $id)->update($insert_data);
					NewsContent::where('news_id', $id)->update(array(
						'content'=> $content,
					));
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
}