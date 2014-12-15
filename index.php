<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include "include/cuhappyhour.php";
?>
<!DOCTYPE html>
<html language="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <?php
    echo header::getHeader();
    ?>
    <?php

    if(isset($_GET['p'])){
        $p = $_GET['p'] . "php";
        if(!file_exists("pages/$p")){
            include "pages/error.php";
        }
        else{
            print "Opening $p";
            include "pages/$p";
        }

    }
	else{
    		include "calendar.php";
	}
    ?>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


</body>
</html>


