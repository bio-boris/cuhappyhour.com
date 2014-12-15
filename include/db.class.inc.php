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
             return $result[0]['venue_name'];
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


	public static function insertVenue(){

	}


	public static function showTables(){
		self::insertVenue();
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
