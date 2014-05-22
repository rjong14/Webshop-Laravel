<?php
if(!isset($_SESSION)) { session_start(); }

class ShoppingCart {

	public function __construct()
	{

		if(!isset($_SESSION['cart_items']))
			$_SESSION['cart_items'] = json_encode(array());
	}
	public function getAll()
	{
		$items = $_SESSION['cart_items'];
		// Decode to objects
		$items = json_decode($items);
		// Return the collection
		return $items;
	}
	public function getTotalPrice()
	{
		$items = $this->getAll();
		$total = 0;
		foreach($items as $item)
		{
			if(!empty($item))
			{
				$total = $total + ($item->price * $item->qty);
			}
		}
		return $total;
	}
	public function setEmpty()
	{
		$empty = json_encode(array());
		$_SESSION['cart_items'] = $empty;	
	}
	public function put(Item $item)
	{

		$exist = $this->exists($item->getID());
		if(!$exist)
		{
			$products = $this->getAll();
			$new_product = array(array('id'=>$item->getID(), 'name'=>$item->getName(), 'image'=>$item->getImage(), 
									   'category'=>$item->getCategory(), 'qty'=>$item->getQuantity(), 'price'=>$item->getPrice() ));

			$_SESSION['cart_items'] = array_merge($products, $new_product);
			$_SESSION['cart_items'] = json_encode($_SESSION['cart_items']);
		} else
		{
			$this->update($item->getID(), $item->getQuantity());
		}
	}
	public function count()
	{
		$items = $this->getAll();
		return count($items);
	}
	public function remove($id)
	{
		$exists = $this->exists($id);
		if($exists)
		{
			// Item exists, so delete it
			$items = $this->getAll();

			$i = 0;
			foreach($items as $item)
			{
				if($item->id == $id)
				{
					// Item is found, return the index from the collection
					break;
				}
				$i++;
			}
			// Unset the item
			unset($items[$i]);

			// Commit changes to SESSION
			$_SESSION['cart_items'] = json_encode(array_values($items));

			return true;
		}
		return false;
	}
	public function isEmpty()
	{
		return empty($this->items);
	}
	public function exists($item_id)
	{
		$items = $this->getAll();
		foreach($items as $i)
		{	
			if($i->id == $item_id)
			{
				return true;
			}
		}
		return false;
	}
	public function update($item_id, $amount)
	{
		$items = $this->getAll();
		foreach($items as $i)
		{
			if($i->id == $item_id)
			{
				$i->qty = $amount;
			}
		}
		$_SESSION['cart_items'] = $items;
		$_SESSION['cart_items'] = json_encode($_SESSION['cart_items']);
	}
}
?>