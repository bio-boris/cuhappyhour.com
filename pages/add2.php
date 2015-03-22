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
	$description = "<h4>Add a venue , such as a bar or restuarant.</h4><hr>";
	$content = 
"

<input type='text' name='venue_name'/> <label > Name           </label> <br>
<input type='text' name='venue_phone'/> <label > Telephone           </label> <br>
<input type='text' name='venue_address'/> <label > Address        </label>  <br>
<input type='text' name='venue_coordinates'/> <label > Coordinates    </label> <br>
<input type='text' name='venue_name'/> <label > Website </label><br> <br>
<input type='submit' name='submit_venue' value='Insert Venue' />
</form>";
/*
<label > Days Open      </label> <br>
<input type='checkbox' name='venue_days' value='0'> Mon 
<input type='checkbox' name='venue_days' value='1'> Tue 
<input type='checkbox' name='venue_days' value='2'> Wed 
<input type='checkbox' name='venue_days' value='3'> Thr 
<input type='checkbox' name='venue_days' value='4'> Fri 
<input type='checkbox' name='venue_days' value='5'> Sat 
<input type='checkbox' name='venue_days' value='6'> Sun <br><br> 
</form>
*/
addDiv($description,$content);

}

function addDealForm(){

	$description = "Add a deal, such as a drink or food special.";
	$content = 
"

<input type='text' name='deal_name'/> <label > Name</label><br>
<input type='text' name='deal_description'/> <label > Description</label><br>
<label > Venue  </label>  <br>
<select name='deal_venue'/> " . getVenuesAsOptions() .  "</select><br>

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
