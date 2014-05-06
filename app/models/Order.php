<?php
class Order extends Eloquent {

	protected $table = "orders";
	protected $fillable = array('gebrID', 'beschrijving', 'datum');
	protected $key = 'id';
	protected $softDelete = false;
	public $timestamps = false;
  
	public function user()
	{
		return $this->belongsTo('User', 'gebrID');
	}
	public function orderregels()
	{
		return $this->hasMany('Orderregel', 'order_id');
	}
	public function validate($input)
	{
		 $rules = array(
		'user'			=>		'required',
		'description'	=>		'required',
		'date'			=>		'required'
		);
		return Validator::make($input, $rules);
	}
}

?>