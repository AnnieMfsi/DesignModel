<?php
class Book{
	public $title = '';
	function getTitle(){
		return $this->title;
	}
	function setTitle($newTitle){
		$this->title = $newTitle;
	}
	function __clone(){
	}
}
$bookObj1 = new Book();
$bookObj1->setTitle('Wazir');
$b1 = $bookObj1->getTitle();
echo $b1 . '<br />';

$bookObj3 = $bookObj1;
$bookObj3->setTitle('Kite Runner');
$b3 = $bookObj3->getTitle();
echo $b3 . '<br />';
echo $bookObj1->getTitle() . '<br />';


$bookObj2 = clone $bookObj1;
$bookObj2->setTitle('Alchemist');
$b2 = $bookObj2->getTitle();
echo $b2 . '<br />';
?>