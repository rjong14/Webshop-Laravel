<?php 
class Item {

	private $id;
	private $name;
	private $image;
	private $qty;
	private $price;
	private $cat;

	public function __construct($id, $name, $image, $qty, $price, $cat)
	{
		$this->id 		= $id;
		$this->name 	= $name;
		$this->image 	= $image;
		$this->qty 		= $qty;
		$this->price 	= $price;
		$this->cat 		= $cat;
	}

	public function getID()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getImage()
	{
		return $this->image;
	}
	public function getQuantity()
	{
		return $this->qty;
	}
	public function getprice()
	{
		return $this->price;
	}
	public function getCategory()
	{
		return $this->cat;
	}
}

?>