<?php
require 'conn.php';
$sql_update="UPDATE actorid SET a_name='$_POST[a_name]',a_lastname='$_POST[a_lastname]' ,a_bdate='$_POST[a_bdate]' ,a_movie='$_POST[a_movie]' WHERE a_id='$_POST[a_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvd_shop/actorbio.php");
}

?>