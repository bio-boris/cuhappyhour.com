<?php

class events {

    private $venue;
    private $events;
    private $ids_for_day;

    public function populateEvents(){

        //$rows = getEventsFromDataBase();
        //Foreach database row
        #  $this->events[] = new event(0,"25c wings @A",0,"BUffalo");
        #  $this->events[] = new event(1,"50c wings @B",0,"Bob");
        #  $this->events[] = new event(2,"50c wings @C",2,"Boltini");
        #  $this->ids_for_day[0] = array(0,1);#
        #  $this->ids_for_day[2] = array(2);

        for($day =0 ; $day<7; $day++){
            print "Deals for $day <br>";
            $deals = db::getDealsByDay($day);
            foreach($deals as $sql_row){
                if(!isset($sql_row)){
                    continue;
                }
                $id = $sql_row['deal_id'];
                $e= $this->createEvent($id,$day,$sql_row);
                $this->events[] = $e;
                $this->ids_for_day[$day][] = $id;
            }



        }

    }

    private function createEvent($id,$day,$row){
        $e = new event($id);
        $e->setID($id);
        $e->setDay($day);

        if(isset($row['venue_id'])){
            $e->setVenue($this->getVenueById($row['venue_id']));
        }
        if(isset($row['deal_name'])){
            $e->setTitle($row['deal_name']);
        }
        if(isset($row['deal_description'])){
            $e->setDescription($row['deal_description']);
        }

        print "Created event with id[$id] day[$day] venue[{$row['venue_id']}] name[{$row['deal_name']}]<br>";
        return $e;

    }

    private function getVenueById($id){
        return "default";
        return db::getVenueById($id);
    }


    private function getEventsFromDataBase(){


    }



    public function getEventsForDay($day){

        if(isset($this->ids_for_day[$day])){
            $idsForDay = $this->ids_for_day[$day];
        }
        else{
            return null;
        }
        $eventsForDay = array();
        foreach($this->ids_for_day[$day] as $eventID){
            $eventsForDay[] = $this->events[$eventID];
        }
        return $eventsForDay; #okay
    }
}

class event {

    function __construct($id){
        $this->setId($id);
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