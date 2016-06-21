<?php
class Book{
	public $title = '';
	public $author = '';
	function __construct($newTitle, $newAuthor){
		$this->title = $newTitle;
		$this->author = $newAuthor;
	}
	function getTitle(){
		return $this->title;
	}
	function getAuthor(){
		return $this->author;
	}
}

class ExtendedBook{
	public $authorTitle = '';

	function __construct($obj){
		$this->authorTitle = $obj->getTitle() . '+' . $obj->getAuthor();
	}
	function getTitleAndAuthor(){
		echo $this->authorTitle;
	}
	
}
$bookObj1 = new Book('Zaheer', 'Poelo Coelo');

$extendedBookObj = new ExtendedBook($bookObj1);
$extendedBookObj->getTitleAndAuthor();
?>