<?php

class header{
	private static $table =
		"
		<table style='border:solid'>

		<tr>
			<td>Deals</td>
			<td>Reviews</td>
			<td>Events</td>
			<td>About</td>
		</tr>
		</table>
		";

	private static $logo = "<img src='media/logo.jpg'>";


	function getHeader(){
		$defaultHeader = self::$logo;
		$defaultHeader .= self::$table;

		return $defaultHeader;

	}

}
