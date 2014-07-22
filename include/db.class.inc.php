<?php
class db{

	private static $db_location = "sqlite:database/cuhappyhour-july";


	public function insertVenue(){

	}


	public function showTables(){
		$this->insertVenue();

		try {
			$dbh = new PDO(self::$db_location);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM venues";
			foreach ($dbh->query($sql) as $row)
			{
			print_r(	$row);
			}

			$dbh = null;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

	}




}




?>
