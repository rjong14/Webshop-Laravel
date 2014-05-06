<?php
class ProductController extends BaseController {

	public function getIndex()
	{
		$products = Product::all();
		return View::make('backend/products/index', array('products' => $products));
	}
	public function getEdit($id)
	{
		$product = Product::find($id);
		$categorie = Categorie::lists('naam', 'id');
		return View::make('backend/products/edit', array('product' => $product, 'categorie' => $categorie));
	}
	public function getDelete($id)
	{
		$product = Product::find($id);
		return View::make('backend/products/delete', array('product' => $product));
	}
	public function getCreate()
	{
		$categorie = Categorie::lists('naam', 'id');
		return View::make('backend/products/create', array('categorie' => $categorie));
	}
	public function postCreate()
	{
		$product = new Product();
		$input = Input::all();
	   
		$validator = $product->validate($input);
		if($validator->passes())
		{
			$product->prNaam = $input['name'];
			$product->prCategorie = $input['categorie'];
			$product->prImage = $input['image'];
			$product->prPrijs = $input['price'];
			$product->prKbeschrijving = $input['short'];
			$product->prBeschrijving = $input['long'];
			$product->save();
			$response['code'] = 1;
		}
		else {
			$response['code'] = 0;
		}

		return Response::json($response);
	}
	public function postDelete($id)
	{
		$product = Product::find($id);
		$product->delete();
		$response['code'] = 1;
		return Response::json($response);
	}
	public function postEdit($id)
	{
		$product = Product::find($id);
		$input = Input::all();
	    $rules = array(
		'name'			=>		'required|min:5',
		'categorie'		=>		'required|min:1',
		'price'			=>		'required|min:1',
		'image'			=>		'required|min:10',
		'short'			=>		'required|min:20',
		'long'			=>		'required|min:50'
			
		);
		$validator = Validator::make($input, $rules);
		if($validator->passes()) {

			$product->prNaam = $input['name'];
			$product->prCategorie = $input['categorie'];
			$product->prImage = $input['image'];
			$product->prPrijs = $input['price'];
			$product->prKbeschrijving = $input['short'];
			$product->prBeschrijving = $input['long'];
			$product->save();
			$response['code'] = 1;
		}
		else {
			$return['code'] = 0;
		}

		return Response::json($response);
	}
}
?>