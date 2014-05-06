<?php
class Menu extends Eloquent {

	protected $table = "menu";
	protected $fillable = array('label', 'link', 'parent');
	protected $key = 'id';
	protected $softDelete = false;
	public $timestamps = false;
  
  	//public function menu()
  	//{
  	//	return $this->belongsTo('Menu', 'parent');
  	//}
	
	public function validate($input)
	{
		 $rules = array(
		'label'			=>		'required',
		'link'			=>		'required',
		'parent'		=>		'required'
		);
		return Validator::make($input, $rules);
	}
}

?>