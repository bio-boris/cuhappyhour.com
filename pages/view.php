<?php

    $venues = db::getAllVenues();
    foreach($venues as $key=>$val){
        print $key;
        print_r($val);
        print "<br>";
    }


?>
