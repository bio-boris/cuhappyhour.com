<?php

class header{
    private static $table =
        "
		<table style='border:solid' class='table'>

		<tr>
			<td><a href='index.php'>Deals<a></td>
		<!--	<td><a href='?p=reviews'>Reviews</a></td> -->
		<!--	<td><a href='index.php?p=events'>Events</a></td> -->
			<td><a href='index.php?p=about'>About Us</a></td>
			<td><a href='index.php?p=submit_deal'>Submit a deal!</a></td>
			<td><a href='index.php?p=admin_edit_deal'>Admin: Edit Deal / Venue!</a></td>
		</tr>
		</table>
		";

    private static $logo = "<a href='index.php'><img src='media/logo.png' class='img-responsive'></a>";


    static function getHeader(){
        $defaultHeader = self::$logo;
        $defaultHeader .= self::$table;

        return $defaultHeader;

    }

}
