<?php

echo "<form>";
$rows = db::getAllVenues();
$html_rows = "";

foreach($rows as $row){

    $html_rows .= generateRow($row);
}
echo "<table border='1'>$html_rows</table>";

echo "<submit></submit></form>";

function generateRow($row){

    $tds = "";
    $header ="";
    $tds = "";
    $header ="";
    /* foreach($row as $key){
         switch ($row) {
             case "venue_id_2":
                 echo "i equals 0";
                 break;
             case 1:
                 echo "i equals 1";
                 break;
             case 2:
                 echo "i equals 2";
                 break;
             default:
                 $tds .= "<td>$key</td>";
                 break;

         }
     }
         */

    foreach(array_keys($row) as $key){
        $value = $row[$key];
        $tds .= "<td>$key<input>$value</input></td>";

    }
    #for($i =0; $i < count($row); $i++){
    #    if(isset($row[$i])){
    #    };
    #}

    return "<tr>$header</tr><tr>$tds</tr>";


}





?>
