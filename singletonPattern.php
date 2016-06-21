<?php
class FoodConsumption{
	public static $start = FALSE;
	public static $foodPerDay = array();

	/* Keeps track if food record ids started
	 *
	 * @access public startFood
	 * @param food
	 * @return array foodPerDay
	 */	
	public static function startFood($food){
		if (FALSE === self::$start)
		{
			echo 'New Food Record';
			$start = TRUE;
			$foodPerDay = array_push($foodPerDay, new FoodConsumption());
		}
		else
		{	
			echo 'Food Record Started';
			$foodPerDay = array_push($foodPerDay, $food);
		}
		return $foodPerDay;
	}
}
$foodObj = FoodConsumption::startFood($food);
?>

