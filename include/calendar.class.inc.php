<?php


class calendar{

	private $current_day ; //jddayofweek();
	private $current_time; //time();
	private $table;

	private $days = array();
	private $day_integers = array(0, 1, 2, 3, 4, 5, 6);
	private $events; //might make this a class
	/*$events['0']['id0']['name'] = 'boltini';
	$events['0']['id0']['type'] = array('food','drink');
	$events['0']['id0']['discount_type'];

*/

	//So need an event obect to hold other objects
	//Need a location object with "Name, Address, Contact, GeoCoordinates
	//A configuration file that updates the SQL database, adds and removes, it can either compare, or just dump and add
	//Need a special type ? Half Off, 25% off? not sure
	//Need to put this on git


	function __construct() {
		$this->current_day = jddayofweek(0);
		$this->current_time = time();

		$days[0] = 'monday';	
		$days[1] = 'tuesday';	
		$days[2] = 'wednesday';	
		$days[3] = 'thursday';	
		$days[4] = 'friday';	
		$days[5] = 'saturday';	
		$days[6] = 'sunday';	
		$this->days = $days;

		$table = "<table class='main_calendar'><tr>";		

		foreach ($this->day_integers as $day) {
			$table .= "<th>" . ucfirst($this->days[$day]) . "<th>"; 
		}
		$table .= "</tr>";

		$table .= "</table>";
		$this->table = $table;
	}

	public function displayEvents(){
		foreach ($this->day_integers as $day) {
			displayDay($day);
		}
	}

	private function displayDay($day){
		$full_day = $days[$day];
		

	}


	public function getTable(){
		return $this->table;
	}
}

?>
