<?php
class IndexController extends BaseController
{
	public function getIndex()
	{
		return View::make('frontend/index/index');
	}
}

?>