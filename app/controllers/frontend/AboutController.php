<?php
class AboutController extends BaseController
{
	public function getIndex()
	{
		$menu_items = Menu::all();
		return View::make('frontend/about/index')->with('menu_items', $menu_items);
	}
}

?>