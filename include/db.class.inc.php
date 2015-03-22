<?php
class db{
	private static $db_location = "sqlite:database/cuhappyhour-july";

	public static function getDB(){
		$dbh = new PDO(self::$db_location);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $dbh;
	}

	public static function getDealsByDay($day){
		try{
			$dbh = self::getDB();
			$select = "SELECT * from deals where deal_day= :day; )";
			$stmt = $dbh->prepare($select);
			$stmt->bindParam(':day', $day);
			$stmt->execute();
			$deals = $result = $stmt->fetchAll();
			//foreach deal, get venue;
			//$stmt->close();

			return $deals;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public static function getVenueByID($venue_id){
		try{
			$dbh = self::getDB();
			$select = "SELECT venue_name FROM venues where venue_id= :venue_id; )";
			$stmt = $dbh->prepare($select);
			$stmt->bindParam(':venue_id', $venue_id);
			$stmt->execute();
			$result = $stmt->fetchAll();
			if(isset($result[0]['venue_name'])){
				return $result[0]['venue_name'];
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public static function getAllVenues(){
		try{
			$dbh = self::getDB();
			$select = "SELECT * FROM venues";
			$stmt = $dbh->prepare($select);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	private static function getTableColumns($table_name){
		try{
			$colnames = array() ;

			$dbh = self::getDB();
			$stmt = $dbh->prepare("SELECT sql FROM sqlite_master WHERE tbl_name = '$table_name'") ;
			$stmt->execute() ;
			$row = $stmt->fetch() ;

			$sql = $row[0] ;
			$r = preg_match("/\(\s*(\S+)[^,)]*/", $sql, $m, PREG_OFFSET_CAPTURE) ;
			while ($r) {
				array_push( $colnames, $m[1][0] ) ;
				$r = preg_match("/,\s*(\S+)[^,)]*/", $sql, $m, PREG_OFFSET_CAPTURE, $m[0][1] + strlen($m[0][0]) ) ;
			}	
		return $colnames;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public static function getVenueColumns(){
		return self::getTableColumns("venues");
	}

	public static function getVenueNames(){
		try{
			$dbh = self::getDB();
			$select = "SELECT venue_name FROM venues";
			$stmt = $dbh->prepare($select);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public static function getAllDeals(){
		try{
			$dbh = self::getDB();
			$select = "SELECT * FROM deals";
			$stmt = $dbh->prepare($select);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}





	public static function getDealByDealId($id){

	}
	public static function getDealByVenueId($id){

	}
	public static function getDealByType($type){

	}


	public static function insertVenue($venue){
		try {
			$dbh = new PDO(self::$db_location);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT name FROM venues;";
			foreach ($dbh->query($sql) as $row)
			{
				print_r(        $row);
			}

			$dbh = null;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public static function showTables(){
		try {
			$dbh = new PDO(self::$db_location);
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM venues;";
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
