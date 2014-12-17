<?php

    echo "<form>";
    $rows = db::getAllVenues();
    $html_rows = array();

    foreach($rows as $row){
        $html_rows[] = generateRow($row);
    }
    echo "<table>$html_rows</table>";

    echo "</form>";

   function generateRow($row){

       $tds = "";
       foreach($row as $key=>$val){

       switch ($row) {
           case 0:
               echo "i equals 0";
               break;
           case 1:
               echo "i equals 1";
               break;
           case 2:
               echo "i equals 2";
               break;
           default:
               $tds .= "<td>$key and $val</td>";

       }
       }
       return "<tr>$tds</tr>";


   }





?>
