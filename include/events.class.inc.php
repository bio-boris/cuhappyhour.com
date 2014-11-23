<?php

class events {

    private $events = array();
    private $days =array();

    public function populateEvents(){
        
        //Foreach database row
        $e = new event(0,"50% off wings",0);
        $e2 = new event(1,"Free Chicken",1);
        
        
        $this->events = $events;
        $this->days = $days;

    }

    public function getDayForId($id){
        return $this->event[$id]['day'];
    }

    public function getEventsForDay($day){
            $idsForDay = $this->days[$day];
            if(! isset($idsForDay)){
                return;
            }
            $eventsForDay = array();
            foreach($this->days[$day] as $eventID){
                $eventsForDay[$eventID] = $this->events[$eventID]; 
            }
        
        
        
        return $eventsForDay;
    }
}

class event {
    
    private $id;
    private $title;
    private $venue;
    private $location;
    private $day;
    private $tags;
    private $description;
    private $type;
    
    
    
    
//    function __construct($id,$title,$day) {
//        $this->setID($id);
//        $this->setTitle($title);
//        $this->setDay($day);
//		
//	}
//    
//    public function setTitle($title){
//        $this->event['title'] = $title;
//    }
//    
//    
//    public function getVenueName($eventID){
//        return $this->'name';
//    }
//
//    public function getTitle($eventID){
//
//    }
//
//    public function getDays($eventID){
//    
//    }
//    public function getDescription($eventID){
//    
//    }
//    public function getTime($eventID){
//        
//
//    }
}





?>