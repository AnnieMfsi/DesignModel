<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	class Shop
	{
		public $item = '';
		public $cost = '';

		/**
		 * Constructor function
		 * @access public
		 * @param string
		 * @param int
		 * @return void
		 */
		function __construct($newItem, $newCost){
			$this->item = $newItem;
			$this->cost = $newCost;
		}

		/**
		 * Getter function for item
		 * @access public
		 * @param void
		 * @return string
		 */
		function getItem(){
			return $this->item;
		}

		/**
		 * Getter function for cost
		 * @access public
		 * @param void
		 * @return int
		 */
		function getCost(){
			return $this->cost;
		}
	}

	class NewShop{
		public $itemCost = '';

		/**
		 * Constructor function
		 * @access public
		 * @param object
		 * @return void
		 */
		function __construct($obj){
			$this->itemCost = $obj->getItem() . ' + ' . $obj->getCost();
		}

		/**
		 * Fetch the string
		 * @access public
		 * @param void
		 * @return void
		 */
		function getAll(){
			echo $this->itemCost;
		}
		
	}
	$shopObj1 = new Shop('Pendant', '5000');

	$newShopObj = new NewShop($shopObj1);
	$newShopObj->getAll();
?>