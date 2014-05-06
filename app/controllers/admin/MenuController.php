<?php
class MenuController extends BaseController {

	public function getIndex()
	{
		$menu = Menu::all();
		return View::make('backend/menus/index')->with('menus', $menu);
	}
	public function getCreate()
	{
		$menu = array('0' => 'Geen');
		$menu += Menu::lists('label', 'id');

		return View::make('backend/menus/create')->with('menus', $menu);
	}
	public function postCreate()
	{
		$menu = new Menu();
		$input = Input::all();

		$validate = $menu->validate($input);
		if($validate->passes()) 
		{
			$menu->label = $input['label'];
			$menu->link  = $input['link'];
			$menu->parent = $input['parent'];
			$menu->save();
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
		
		$menu = Menu::find($id);
		$menus = array('0' => 'Geen');
		$menus += Menu::lists('label', 'id');
		return View::make('backend/menus/edit')->with(array('menu' => $menu, 'menus' => $menus));
	}
	public function postEdit($id)
	{
		$menu = Menu::find($id);
		$input = Input::all();

		$validate = $menu->validate($input);
		if($validate->passes()) 
		{
			$menu->label = $input['label'];
			$menu->link  = $input['link'];
			$menu->parent = $input['parent'];
			$menu->save();
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
		$menu = Menu::find($id);
		return View::make('backend/menus/delete')->with('menu', $menu);
	}
	public function postDelete($id)
	{
		$menu = Menu::find($id);
		$menu->delete();
		$response['code'] = 1;
		return Response::json($response);
	}
}

?>