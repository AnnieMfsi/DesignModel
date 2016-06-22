<?php

// Maintains list of email for subscribers
class Stock 
{
	public $total = 100;

	/**
		 * Constructor function
		 * @access public
		 * @param void
		 * @return void
		 */
	function __construct()
	{
		if($this->total > 20)
		{
			$this->total--;
			echo 'left in stock' . $this->total;
		}
		else
		{
			$obj = new Watcher();
			$obj->send();
		}
	}
}


class Watcher 
{	
	/**
		 * Watcher message
		 * @access public
		 * @param void
		 * @return void
		 */
	public function send()
	{
		echo "Update your stock";
	}
}

$orderObj = new Stock();

?>