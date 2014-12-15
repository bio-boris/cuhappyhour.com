<?php

#This is the page to modify the database


function get7daycheckbox($name){
	
	$html = "<label>Days of the week </label>";
	$days = array('m','t','w','t','f','s','s');
	$checkbox = "";
	for($i=0; $i < 7; $i++){
		$checkbox .=
		"<input type='checkbox' name='$name" ."_days' value='$i'>{$days[$i]}<br>";

	}


}


function addVenueForm(){
	$description = "Add a venue , such as a bar or restuarant.";
	$content = 
"

<label > Name 		</label> <input type='text' name='venue_name'/>
<label > Address	</label> <input type='text' name='venue_address'/>
<label > Coordinates	</label> <input type='text' name='venue_coordinates'/>
<label > Days Open 	</label> <input type='text' name='venue_name'/>
<label > Website	</label> <input type='text' name='venue_name'/>
<input type='submit' name='submit_venue' value='Insert Venue' />
";
addDiv($description,$content);

}

function addDealForm(){

	$description = "Add a deal, such as a drink or food special.";
	$content = 
"

<label > Name 		</label> <input type='text' name='deal_name'/>
<label > Description	</label> <input type='text' name='deal_description'/>
<label > Venue	</label> <input type='text' name='deal_venue'/> <!--make this a dropdown--!>
<label > Days 	</label> " . get7daycheckbox("deal") . "
<label > Hours	</label> <input type='text' name='deal_hours'/> <!--make this a time dropdown javascript thing eventually !-->
<label > Type	</label> <select name='deal_type'><option value='drink'>Drink</option><option value='food'>Food</option>' </select>
<input type='submit' name='submit_venue' value='Insert Venue' />
";
addDiv($description,$content);

}

function modifyVenueForm(){

	$description = "Add a venue , such as a bar or restuarant";
	$content = 
"

<label > Name 		</label> <input type='text' name='venue_name'/>
<label > Address	</label> <input type='text' name='venue_address'/>
<label > Coordinates	</label> <input type='text' name='venue_coordinates'/>
<label > Days Open 	</label> <input type='text' name='venue_name'/>
<label > Website	</label> <input type='text' name='venue_name'/>
<input type='submit' name='submit_venue' value='Insert Venue' />
";
addDiv($description,$content);

}

function modifyDealForm(){
	$description = "Add a venue , such as a bar or restuarant";
	$content = 
"

<label > Name 		</label> <input type='text' name='venue_name'/>
<label > Address	</label> <input type='text' name='venue_address'/>
<label > Coordinates	</label> <input type='text' name='venue_coordinates'/>
<label > Days Open 	</label> <input type='text' name='venue_name'/>
<label > Website	</label> <input type='text' name='venue_name'/>
<input type='submit' name='submit_venue' value='Insert Venue' />
";
addDiv($description,$content);


}


function deleteItemForm(){


}


function addDiv($description,$content){
	echo
	"<div class='form_description'>" . "<p>" . $description . "</p>" . "</div>";
	echo
	"<div class='form_content'>" . "<p>" . $content . "<p>" . "<div>";
}


?>

<form id="cuhappyhour_modify" class="cuhappyhour"  method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
<?php addVenueForm(); ?>

<?php addDealForm(); ?>


</form>

<?php
//Get schemas
//$venue_schema = $db->getSchema("CONFIG['venue_table_name']");
//$deal_schema  = $db->getSchema("CONFIG['deal_table_name']");
//$review_schema

//Add a venue

//Add a deal

//Add a review?

//Modify existing Deal  or Venue , including delete


?>
