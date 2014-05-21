<?php
class LoginController extends BaseController {

	public function getIndex()
	{
		return View::make('frontend/login/index');
	}
	public function postCheck()
	{
			$input = Input::all();
			$username = $input['username'];
			$password = $input['password'];

			$user = User::where("gebruikersnaam", '=', $username)
						->where('wachtwoord', '=', $password)
						->get();

			$response['code'] = 0;
			if(count($user)) {
				Auth::loginusingId($user->first()->id);
				$response['code'] = 1;
			}
			return Response::json($response);
		
	}
}
?>