<?php
class UserController extends BaseController  {

	public function getIndex()
	{
		$users = User::all();
		return View::make('backend/users/index', array('users' => $users));
	}
	public function getCreate()
	{
		return View::make('backend/users/create');
	}
	public function postCreate()
	{
		$user = new User();
		$input = Input::all();
		$validate = $user->validate($input);
		if($validate->passes())
		{
			$user->gebruikersnaam 	= $input['username'];
			$user->wachtwoord		= $input['password'];
			$user->voornaam			= $input['firstname'];
			$user->achternaam		= $input['lastname'];
			$user->adres 			= $input['adress'];
			$user->woonplaats		= $input['city'];
			$user->postcode 		= $input['zip'];
			$user->email 			= $input['email'];
			$user->isAdmin			= $input['admin'];
			$user->save();
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
		$user = User::find($id);
		return View::make('backend/users/delete')->with('user', $user);
	}
	public function postDelete($id)
	{
		$user = User::find($id);
		$user->delete();
		$response['code'] = 1;
		return Response::json($response);
	}
	public function getEdit($id)
	{	
		$user = User::find($id);
		return View::make('backend/users/edit')->with('user', $user);
	}
	public function postEdit($id)
	{
		$user = User::find($id);
		$input = Input::all();

		$validate = $user->validate($input);
		if($validate->passes())
		{
			$user->gebruikersnaam 	= $input['username'];
			if(strlen($input['password']) > 0){ 
			$user->wachtwoord		= $input['password'];
			} else {
				$user->wachtwoord 	= $user->wachtwoord;
			}
			$user->voornaam			= $input['firstname'];
			$user->achternaam		= $input['lastname'];
			$user->adres 			= $input['adress'];
			$user->woonplaats		= $input['city'];
			$user->postcode 		= $input['zip'];
			$user->email 			= $input['email'];
			$user->isAdmin			= $input['admin'];
			$user->save();
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