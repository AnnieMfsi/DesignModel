<?php
	class FoodConsumption{

		// To provide and store instance of the class
		private static $start  = FALSE;

		// Private constructor
		 private function __construct() { }

		/* Keeps track if food record ids started
		 *
		 * @access public startFood
		 * @param food
		 * @return array foodPerDay
		 */	
		public static function startFood(){
			if (!self::$start)
			{
				echo 'New Food Record';
				self::$start = new self();
			}
			else
			{	
				echo 'Food Record Started';
			}

			// Return the instance of class
			return self::$start;
		}

		// Clone method, so that instance this class cannot be cloned
	    private function __clone() { }
	}
	$foodObj1 = FoodConsumption::startFood();
	$foodObj2 = FoodConsumption::startFood();
?>
