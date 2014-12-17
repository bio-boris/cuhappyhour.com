<?php

echo "<form>";
$rows = db::getAllVenues();
$html_rows = "";

foreach($rows as $row){

    $html_rows .= generateRow($row);
}
echo "<table border='1' >$html_rows</table>";

echo "<submit></submit></form>";
echo "<br>";

print_r($rows);

function generateRow($row)
{


    $tds = "";
    $header = "";


    foreach (array_keys($row) as $key) {
        $value = $row[$key];
        $tds .= "<td>$key<input value='$value'></td>";
    }

        $colspan = count(array_keys($row)); #}

        return "<tr>$header</tr>
                <tr>$tds</tr>
            <tr><td colspan='{$colspan}'></td></tr>";

}





?>
