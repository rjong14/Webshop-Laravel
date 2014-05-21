<?php
class TaskController extends BaseController
{
	public function getIndex()
	{
		$menu_items = Menu::all();
		return View::make('frontend/task/index')->with('menu_items', $menu_items);
	}
}

?>