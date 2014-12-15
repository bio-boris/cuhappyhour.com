<?php


class calendar{

	private $current_day ; //jddayofweek();
	private $current_time; //time();
	private $table;
	private $E;
	private $days = array();
	private $day_integers = array(0, 1, 2, 3, 4, 5, 6);

	
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

		$table = "<table class='main_calendar table table-bordered table-hover table-condensed ' ><tr>";

		foreach ($this->day_integers as $day) {
			$table .= "<th>" . ucfirst($this->days[$day]) . "</th>"; 
		}
		$table .= "</tr>";

		$table.= $this->getEventsHTML();
		$table .= "</table>";
		$this->table = $table;
		
	}
	
	
	private function getEventsHTML(){
		$this->E = new events();
		$this->E->populateEvents();
		return $this->retrieveEvents();
	}
	

	private function retrieveEvents(){
		$html= "";
		foreach(range(0,6) as $day){
        	$html .= $this->createDayHTML($day);
		}
		return "<tr>$html</tr>";
	}
	
	
	private function createDayHTML($day){
		$todaysEvents = $this->E->getEventsForDay($day);
		$html = "";
      for($i =0; $i< count($todaysEvents); $i++){
            $event = $todaysEvents[$i];
            if(get_class($event) == "event"){
                $html .= "Event" . $this->createEventHTML($event);
            }
        }
		return "<td>$html</td>";
	}
	
	private function createEventHTML($event){
            echo "About to create event html for object type of" . get_class($event) . "<br>";
		    $venue_name = $event->getVenue();
			$title = $event->getTitle();
			$html = "<span>{$title} @ {$venue_name}</span><br><br>";
			return $html;
	}


	public function getTable(){
		return $this->table;
	}
}

?>
