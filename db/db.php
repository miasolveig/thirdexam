<?php
$db = mysqli_connect($db_host="localhost",$db_user="root",$db_password="",$db_database="php-undervisning")
or die("Error - cant connect or find db");
mysqli_set_charset($db,"utf8")
?>