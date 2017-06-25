<?php
define ("db_host_1", 'localhost');
define ("db_name_1", 'GPN1c');
define ("db_usnm_1", 'root');
define ("db_pass_1", '');
$bd1 = mysql_connect(db_host_1,db_usnm_1,db_pass_1);
mysql_select_db(db_name_1,$bd1);
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

?>