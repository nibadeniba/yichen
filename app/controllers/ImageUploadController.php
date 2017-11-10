<?php 

/**
* 
*/
class ImageUploadController extends BaseController
{
	// 图片上传
	function  imageUpload()
	{
		$file = Input::file('img');
		$dir = Input::get('dir', '');

		$upload_dir = './upload';

		try {

			if (!Input::hasFile('img')) {
				throw new Exception("没有上传文件");
			}

			if ($dir) {
				$upload_dir .= '/'.trim($dir, '/');
			}
			$ext = $file->getClientOriginalExtension();
			$web_dir = ltrim($upload_dir, '.');

			$file_name = date('YmdHis').uniqid().'.'.trim($ext);
			$file->move($upload_dir, $file_name);

			return Response::json(array('status'=> 1, 'url'=> $web_dir.'/'.$file_name));
		} catch (Exception $e) {
			return Response::json(array('status'=> 0, 'message'=> '上传失败:'.$e->getMessage()));
		}
	}
}