<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	class WorkClass{
		public $requirement = NULL;
		function __construct($work)
		{
			$this->requirement = $work;
		}
		function manager()
		{
			echo 'Manager called';
		}
		function sweeper()
		{
			echo 'Sweeper called';
		}
		function developer()
		{
			echo 'Developer called';
		}
	}

	$objWork = new WorkClass('manager');
	if($objWork->requirement == 'manager'){
		$objWork->manager();
	}
	else if($objWork->requirement == 'sweeper'){
		$objWork->manager();
	}
	else if($objWork->requirement == 'developer'){
	}
?>