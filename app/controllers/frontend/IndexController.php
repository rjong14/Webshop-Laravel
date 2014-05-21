<?php
class IndexController extends BaseController
{
	public function getIndex()
	{
		$menu_items = Menu::all();
		$xbox = Product::where('prCategorie', '=', '1')->take(4)->get();
		$computer = Product::where('prCategorie', '=', '2')->take(4)->get();
		$playstation = Product::where('prCategorie', '=', '3')->take(4)->get();
		return View::make('frontend/index/index')->with(array('menu_items' => $menu_items, 'computer' => $computer, 'playstation' => $playstation, 'xbox' => $xbox));
	}
}

?>