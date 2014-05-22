<?php
require_once(__DIR__ . '/../../views/frontend/ShoppingCart.php');
class CheckoutController extends BaseController {

	public function getIndex()
	{
		$menu_items = Menu::all();
		return View::make('frontend/checkout/index')->with(array('menu_items' => $menu_items));
	}
	public function postOrder()
	{
		$response['code']=0;
		$order = new Order();
		$order->gebrID 			= Auth::User()->id;
		$order->beschrijving	= "Order voor " . Auth::User()->voornaam;
		$order->datum 			= date("Y-m-d H:i:s");
		$order->save();

		$cart = new ShoppingCart();
		$items = $cart->getAll();
		
		foreach($items as $item)
		{
			$orderregel = new Orderregel();
			$orderregel->order_id 		= $order->id;
			$orderregel->producten_id	= $item->id;
			$orderregel->aantal 		= $item->qty;
			$orderregel->save();
		}
		$cart->setEmpty();
		$response['code'] = 1;
		return Response::json($response);
	}
}
?>