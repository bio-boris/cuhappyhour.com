<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

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
include "calendar.php";

?>
</body>
</html>


