<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {


	protected $table = "gebruikers";
	protected $id = "id";
	public $timestamps = false;
	protected $fillable = array('gebruikersnaam', 'wachtwoord', 'voornaam', 'achternaam', 'adres', 'woonplaats', 'postcode', 'email', 'isAdmin');

	public function getFullNameAttribute()
	{
    return $this->attributes['voornaam'] .' '. $this->attributes['achternaam'];
	}
	public function validate($input)
	{
		 $rules = array(
		'username'		=>		'required',
		'firstname'		=>		'required',
		'lastname'		=>		'required',
		'city'			=>		'required',
		'adress'		=>		'required',
		'zip'			=>		'required',
		'email'			=>		'required'
			
		);
		return Validator::make($input, $rules);
	}
	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}
	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}
	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
}
?>