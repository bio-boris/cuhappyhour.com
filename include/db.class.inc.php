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
            $select = "SELECT * from deals_list where deal_day= :day)";
            $stmt = $dbh->prepare($select);
            $stmt->bindParam(':day', $day);
            $stmt->execute();
            $deals = $result = $stmt->fetchAll();
            //foreach deal, get venue;
            $stmt->close();
            return $deals;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    private static function getVenuesByID($venue_id){

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
