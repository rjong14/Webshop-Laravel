<?php
class OrderController extends BaseController {

	public function getIndex()
	{
		$orders = Order::all();
		return View::make('backend/orders/index')->with('orders', $orders);
	}
	public function getCreate()
	{
		$users = User::orderBy('voornaam')->get();
		$users = $users->lists('FullName', 'id');
		return View::make('backend/orders/create', array('users' => $users));
	}
	public function getDetail($id)
	{
		$order_id = $id;
		$products = Product::lists('prNaam', 'id');
		$regels = Orderregel::join('producten', 'producten.id', '=', 'orderregel.producten_id')
    	 ->where('order_id', $id)
    	 ->get();
		return View::make('backend/orders/regels/index', array('regels' => $regels, 'order_id' => $order_id, 'products' => $products));
	}
	public function getDeleteregel($id)
	{
		$orderregel = Orderregel::find($id);
		$orderid = $orderregel->order_id;
		return View::make('backend/orders/regels/delete', array('id' => $id, 'orderid' => $orderid));
	}
	public function postDeleteregel($id)
	{
		$orderregel = Orderregel::find($id);
		$orderregel->delete();
		$response['code'] = 1;
		return Response::json($response);
	}
	public function getNewregel($id)
	{
		$products = Product::lists('prNaam', 'id');
		return View::make('backend/orders/regels/create', array('products' => $products, 'id' => $id));

	}
	public function postNewregel($id)
	{
		$orderregel = new Orderregel();
		$input = Input::all();

		$orderregel->producten_id = $input['product'];
		$orderregel->aantal = $input['amount'];
		$orderregel->order_id = $id;
		$orderregel->save();
		$response['code'] = 1;
		return Response::json($response);
	}
	public function postCreate()
	{
		$order = new Order();
		$input = Input::all();

		$validate = $order->validate($input);
		if($validate->passes())
		{
			$order->gebrID = $input['user'];
			$order->beschrijving = $input['description'];
			$order->datum = $input['date'];
			$order->save();
			$response['code'] = 1;
		}
		else
		{
			$response['code'] = 0;
		}
		return Response::json($response);
	}
	public function getEdit($id)
	{
		$order = Order::find($id);
		$users = User::orderBy('voornaam')->get();
		$users = $users->lists('FullName', 'id');
		return View::make('backend/orders/edit')->with(array('order' => $order, 'users' => $users));
	}
	public function getDelete($id)
	{
		$order = Order::find($id);
		return View::make('backend/orders/delete', array('order' => $order));
	}
	public function postDelete($id)
	{
		$order = Order::find($id);
		$order->delete();
		$response['code'] = 1;
		return Response::json($response);
	}
	public function postEdit($id)
	{
		$order = Order::find($id);
		$input = Input::all();

		$validate = $order->validate($input);
		if($validate->passes())
		{
			$order->gebrID = $input['user'];
			$order->beschrijving = $input['description'];
			$order->datum = $input['date'];
			$order->save();
			$response['code'] = 1;
		}
		else
		{
			$response['code'] = 0;
		}
		return Response::json($response);
	}
}

?>