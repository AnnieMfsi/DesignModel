<?php

ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	class Shop
	{
		public $item = '';
		public $cost = '';
		function __construct($newItem, $newCost){
			$this->item = $newItem;
			$this->cost = $newCost;
		}
		function getItem(){
			return $this->item;
		}
		function getCost(){
			return $this->cost;
		}
	}

	class NewShop{
		public $itemCost = '';

		function __construct($obj){
			$this->itemCost = $obj->getItem() . ' + ' . $obj->getCost();
		}
		function getAll(){
			echo $this->itemCost;
		}
		
	}
	$shopObj1 = new Shop('Pendant', '5000');

	$newShopObj = new NewShop($shopObj1);
	$newShopObj->getAll();
?>