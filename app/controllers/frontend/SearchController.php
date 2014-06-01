<?php
class SearchController extends BaseController {

	public function postIndex()
	{
		$menu_items = Menu::all();
		$input = Input::all();
		$search = $input['search_input'];
		$products = Product::where('prNaam', 'like', '%' . $search . '%')->get();

		return View::make('frontend/search/index')->with(array('menu_items' => $menu_items, 'products' => $products, 'search'=>$search));
	}
}
?>