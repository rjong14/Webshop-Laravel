<?php
class CategorieController extends BaseController  {

	public function getIndex()
	{
		$categories = Categorie::all();
		return View::make('backend/categories/index', array('categories' => $categories));
	}
	public function getCreate()
	{
		return View::make('backend/categories/create');
	}
	public function postCreate()
	{
		$categorie = new Categorie();
		$input = Input::all();
		$validate = $categorie->validate($input);
		if($validate->passes())
		{
			$categorie->naam = $input['name'];
			$categorie->save();
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
		$categorie = Categorie::find($id);
		return View::make('backend/categories/edit')->with('categorie', $categorie);
	}
	public function postEdit($id)
	{
		$categorie = Categorie::find($id);
		$input = Input::all();
		$validate = $categorie->validate($input);
		if($validate->passes())
		{
			$categorie->naam = $input['name'];
			$categorie->save();
			$response['code'] = 1;
		}
		else
		{
			$response['code'] = 0;
		}
		return Response::json($response);

	}
	public function getDelete($id)
	{
		$categorie = Categorie::find($id);
		return View::make('backend/categories/delete')->with('categorie', $categorie);
	}
	public function postDelete($id)
	{
		$categorie = Categorie::find($id);
		$categorie->delete();
		$response['code'] = 1;
		return Response::json($response);
	}
}
?>