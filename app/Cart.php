<?php

namespace App;

class Cart{
	public $items = array();
	public $totalQ = 0;
	public $totalP = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQ = $oldCart->totalQ;
			$this->totalP = $oldCart->totalP;
		}
	}

	public function add($item, $id){
		$storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}

		}

		$storedItem['qty']++;
		$storedItem['price'] = $item->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQ++;
		$this->totalP += $item->price;
	}

	public function remove($item, $id){
		$storedItem = $this->items[$id];
		if($storedItem['qty'] == 1){
			$this->totalQ--;
			$this->totalP -= $item->price;
			unset($this->items[$id]);
		}
		else{
			$storedItem['qty']--;
			$storedItem['price'] -= $item->price;
			$this->items[$id] = $storedItem;
			$this->totalQ--;
			$this->totalP -= $item->price; 
		}
		
	}

	public function delete($item, $id){
		$storedItem = $this->items[$id];
		$this->totalQ -= $storedItem['qty'];
		$this->totalP -= $storedItem['price'];
		unset($this->items[$id]); 
	}
}