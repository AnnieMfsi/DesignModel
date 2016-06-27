<?php
ini_set('display_errors', 1);//for errors to be printed on screen for user or not
ini_set('display_startup_errors', 1);//for php start up errors during debugging
error_reporting(E_ALL);
	
class Shop
{
    private $food;

    public function __construct($make)
    {
        $this->food= $make;
    }

    /**
	 * Return the value of data member
	 * @access public
	 * @param 
	 * @return string
	 */
    public function getAndMake()
    {
        return $this->food;
    }
}

class Bakery
{
	/**
	 * To produce required item
	 * @access public
	 * @param string
	 * @return object
	 */
    public static function produce($make)
    {
        return new Shop($make);
    }
}

// have the factory create the Automobile object
$pastry = Bakery::produce('Orange Pastry');

print_r($pastry->getAndMake());
?>