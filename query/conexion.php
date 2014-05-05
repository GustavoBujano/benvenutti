<?php
//$db = new mysqli('localhost', 'root', '', 'coleg148_benvenutti');
$db = new mysqli('10.33.143.26',  'coleg148_ti', 'innovacionesti.2013','coleg148_benvenutti');

if($db->connect_errno > 0)
{
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>
