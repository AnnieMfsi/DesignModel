<?php

// Maintains list of email for subscribers
class Stock 
{
	public $total = 100;
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
	public function send()
	{
		echo "Update your stock";
	}
}

$orderObj = new Stock();

?>