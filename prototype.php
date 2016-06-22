<?php
	class Employee{

		private $name;

		/**
		 * Return name
		 * @access public
		 * @param 
		 * @return string
		 */
		function getName(){
			return $this->name;
		}

		/**
		 * Setter method
		 * @access public
		 * @param string
		 * @return void
		 */
		function setName($newName){
			$this->name = $newName;
		}
		function __clone(){
		}
	}

	$empObj1 = new Employee();
	$empObj1->setName('John');
	echo 'obj1->' . $empObj1->getName() . '<br />';
	
	$empObj3 = $empObj1;
	$empObj3->setName('Krishna');
	echo "obj3-> " . $empObj3->getName() . '<br />';

	echo "obj1-> " . $empObj1->getName() . '<br />';


	$empObj2 = clone $empObj1;
	$empObj2->setName('Shehzaad');
	echo "obj2 clone -> " . $empObj2->getName() . '<br />';
	echo "obj1-> " . $empObj1->getName() . '<br />';

?>