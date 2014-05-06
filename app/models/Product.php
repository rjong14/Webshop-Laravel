<?php
class Product extends Eloquent {

	protected $table = "producten";
	protected $fillable = array('prCategorie', 'prNaam', 'prPrijs', 'prImage', 'isURL', 'prBeschrijving', 'prKbeschrijving', 'deleted_at');
	protected $key = 'id';
	protected $softDelete = true;
	public $timestamps = false;
  
	public function categorie()
	{
		return $this->belongsTo('Categorie', 'prCategorie');
	}
	public function validate($input)
	{
		 $rules = array(
		'name'			=>		'required|min:5',
		'categorie'		=>		'required|min:1',
		'price'			=>		'required|min:1',
		'image'			=>		'required|min:10',
		'short'			=>		'required|min:20',
		'long'			=>		'required|min:50'
			
		);
		return Validator::make($input, $rules);
	}
}

?>