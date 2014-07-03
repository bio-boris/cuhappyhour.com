<?php
set_include_path(get_include_path() . ':.:include');
include_once 'conf/settings.inc.php';
function __autoload($class_name) {
        $potential_file = "include/" . $class_name . ".class.inc.php"; 
	if( file_exists($potential_file)){
		require_once($potential_file);
	}	

}
#date_default_timezone_set(__TIMEZONE__);
#$db = new db(__MYSQL_HOST__,__MYSQL_DATABASE__,__MYSQL_USER__,__MYSQL_PASSWORD__);



?>
