<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$p = isset($_GET['p']) ? $_GET['p'] : null;

include "include/cuhappyhour.php";
?>
<html>
<head>
<?php
echo header::getHeader();
?>
</head>
<body>
<?php
if( ! isset($p)){
	include "calendar.php";
    echo "hey";
}
else{
	if(! file_exists("pages/$p.php" )){
		include "pages/error.php";
	}
	else{
		include "pages/$p.php";
	}
}


?>
</body>
</html>


