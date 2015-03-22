<form name='add_venue' id='add_venue'>

<?php
	$headers = db::getVenueColumns();
	print_r($headers);
	$venues = db::getVenueNames();
	
?>

</form>




