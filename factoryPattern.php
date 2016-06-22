<?php
ini_set('display_errors', 1);//for errors to be printed on screen for user or not
ini_set('display_startup_errors', 1);//for php start up errors during debugging
error_reporting(E_ALL);
	class Dog extends Animal
	{
		private $breed;

		 /**
		 * Keeps track of the books supplied
		 * @access public
		 * @param object
		 * @return void
		 */
		 function __construct($br)
		 {
			$this->breed = $br;
		}
		
		/**
		 * Display data
		 * @access public
		 * @param void
		 * @return void
		 */
		function display(){
			echo $this->breed;
			echo Animal::getFood();
		}

	}
	class Animal{
		private $food;

		/**
		 * Set the value of data member
		 * @access public
		 * @param string
		 * @return void
		 */
		function setFood($reqFood){
			$this->food = $reqFood;
		}

		/**
		 * Return the value of data member
		 * @access public
		 * @param 
		 * @return string
		 */
		function getFood(){
			return $this->food;
		}
	}
	$dogObj = new Dog('German Shephard');
	$dogObj->setFood('bone');
	$dogObj->display();
?>