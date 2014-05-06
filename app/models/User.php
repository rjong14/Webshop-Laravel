<?php
class User extends Eloquent {

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
		'email'			=>		'required',
		'admin'			=>		'required'
			
		);
		return Validator::make($input, $rules);
	}
}
?>