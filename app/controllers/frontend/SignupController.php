<?php
class SignupController extends BaseController {

	public function getIndex()
	{
		return View::make('frontend/signup/index');
	}
	public function postCreate()
	{
		$input = Input::all();
		$user = new User();
		$check = User::where('gebruikersnaam', '=', $input['username'])->get();
		$validate = $user->validate($input);

		if(count($check) == 0)
		{
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
				$user->isAdmin			= 0;
				$user->save();
				Auth::loginusingId($user->id);
				$response['code'] = 1;
			}
			else
			{
				$response['code'] = 0;
			}
		}
		else
		{
			$response['code'] = 2;
		}
		return Response::json($response);
	}
}
?>