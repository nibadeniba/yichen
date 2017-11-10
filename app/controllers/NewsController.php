<?php 

/**
* 
*/
class NewsController extends BaseController
{
	function news()
	{

		
		$news_model = new News();
		$news = $news_model->where('is_show', 1)->paginate(15);

		$view_data = array(
			'nav_active' => 'news',
			'news'=> $news,
		);
		return View::make('web.news', $view_data);
	}

	function newsDetail()
	{
		$id = Input::get('id');

		$news = News::find($id);

		if (!$news) {
			return Redirect::to('/news');
		}

		News::where('id', $id)->increment('clicks');
		$view_data = array(
			'nav_active' => 'news',
			'news' => $news,
		);
		return View::make('web.news_detail', $view_data);
	}

}