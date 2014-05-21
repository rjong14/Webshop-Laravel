<?php
class FProductController extends BaseController {

	public function getIndex()
	{
		$menu_items = Menu::all();
		return View::make('frontend/product/index')->with('menu_items', $menu_items);
	}
	public function getXbox()
	{
		$products = Product::where('prCategorie', '=', '1')->get();
		$name = "Xbox";
		$menu_items = Menu::all();
		return View::make('frontend/product/list')->with(array('menu_items' => $menu_items, 'products' => $products, 'name' => $name));
	}
	public function getComputer()
	{
		$products = Product::where('prCategorie', '=', '2')->get();
		$name = "Computer";
		$menu_items = Menu::all();
		return View::make('frontend/product/list')->with(array('menu_items' => $menu_items, 'products' => $products, 'name' => $name));
	}
	public function getPlaystation()
	{
		$products = Product::where('prCategorie', '=', '3')->get();
		$name = "Playstation";
		$menu_items = Menu::all();
		return View::make('frontend/product/list')->with(array('menu_items' => $menu_items, 'products' => $products, 'name' => $name));	
	}
}
?>