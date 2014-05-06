<?php
class Categorie extends Eloquent {

	protected $table = "Categorie";
	protected $id = "id";
	protected $fillable = array('naam');
	public $timestamps = false;

	public function products()
	{
		return $this->hasMany('Product');
	}
	public function validate($input)
	{
		 $rules = array(
		'name'			=>		'required'
			
		);
	return Validator::make($input, $rules);
	}
}
?>