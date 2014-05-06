<?php
class Orderregel extends Eloquent {

	protected $table = "orderregel";
	protected $fillable = array('order_id', 'producten_id', 'aantal');
	protected $key = 'order_regel_id';
	protected $primaryKey = 'order_regel_id';
	protected $softDelete = false;
	public $timestamps = false;
  
	public function validate($input)
	{
		 $rules = array(
		'user'			=>		'required',
		'description'	=>		'required',
		'date'			=>		'required'
		);
		return Validator::make($input, $rules);
	}
	public function order()
	{
		$this->belongsToMany('Order', 'order_id');
	}
	public function product()
	{
		return $this->hasOne('Product', 'producten_id');
	}
}

?>