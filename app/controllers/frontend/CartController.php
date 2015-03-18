<?php
require_once(__DIR__ . '/../../views/frontend/ShoppingCart.php');
require_once(__DIR__ . '/../../views/frontend/Item.php');


class CartController extends BaseController
{
	public function postAdd()
	{
		$cart = new ShoppingCart();
		$input = Input::all();
		$product_id 	= $input['product_id'];
		$product_name 	= $input['product_name'];
		$product_image 	= $input['product_image'];
		$product_price 	= $input['product_price'];
		$product_cat 	= $input['product_cat'];
		$product_qty 	= $input['product_qty'];
		$item = new Item($product_id, $product_name, $product_image, $product_qty, $product_price, $product_cat);
		$cart->put($item);
	}
	public function getIndex()
	{
		$menu_items = Menu::all();
		return View::make('frontend.cart.index')->with('menu_items', $menu_items);
	}
	public function postRemove($id)
	{
		$cart = new ShoppingCart();
		$cart->remove($id);
	}
}

?>
