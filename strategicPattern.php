<?php
php info(); exit();

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
	if($objWork->$requirement == 'manager'){
		$objWork->manager();
	}
	else if($objWork->$requirement == 'sweeper'){
		$objWork->manager();
	}
	else if($objWork->$requirement == 'developer'){
	}
?>