<?php

class events {

    private $events;
    private $days;

    public function populateEvents(){

        //$rows = getEventsFromDataBase();
        //Foreach database row
        $this->events[] = new event(0,"25c wings @A",0,"BUffalo");
        $this->events[] = new event(1,"50c wings @B",0,"Bob");
        $this->events[] = new event(2,"50c wings @C",2,"Boltini");

        $this->days[0] = array(0,1);
        $this->days[2] = array(2);
    }

    private function getEventsFromDataBase(){


    }



    public function getEventsForDay($day){
            $idsForDay = $this->days[$day];
            if(! isset($idsForDay)){
                return null;
            }
            $eventsForDay = array();
            foreach($this->days[$day] as $eventID){
                $eventsForDay[] = $this->events[$eventID];
            }
            return $eventsForDay; #okay
    }
}

class event {

    function __construct($id,$name,$day,$venue){
        $this->createEvent($id,$name,$day,$venue);
    }


    public function createEvent($id,$name,$day,$venue){
        $this->setDay($day);
        $this->setId($id);
        $this->setTitle($name);
        $this->setVenue($venue);
    }


    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }
    
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param mixed $venue
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    private $title;
    private $venue;
    private $location;
    private $day;
    private $tags;
    private $description;
    private $type;
    
    
    

}





?>