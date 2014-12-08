<?php

class header{
    private static $table =
        "
		<table style='border:solid' class='table'>

		<tr>
			<td><a href='index.php''>Deals<a></td>
		<!--	<td><a href='index.php?=reviews'>Reviews</a></td> -->
		<!--	<td><a href='index.php?=events'>Events</a></td> -->
			<td><a href='index.php?=about'>About Us</a></td>
		</tr>
		</table>
		";

    private static $logo = "<img src='media/logo.jpg'>";


    static function getHeader(){
        $defaultHeader = self::$logo;
        $defaultHeader .= self::$table;

        return $defaultHeader;

    }

}
