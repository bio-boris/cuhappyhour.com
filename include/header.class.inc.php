<?php

class header{
	private static $table =
		"
		<table style='border:solid'>

		<tr>
			<td><a href='?'>Deals Calendar</a></td>
			<td><a href='?p=food_specials'>Favorite food deals</td>
			<td><a href='?p=reviews'>Reviews<a></td>
			<td><a href='?p=about'>About</td>
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
