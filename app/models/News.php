<?php 

/**
* 
*/
class News extends Eloquent
{
	protected $table = 'news';

	public function content()
	{
		return $this->hasOne('NewsContent', 'news_id', 'id');
	}
}