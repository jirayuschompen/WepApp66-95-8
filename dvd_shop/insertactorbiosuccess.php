<?php
require 'conn.php';
$sql_update="INSERT INTO actorid(a_id,a_name,a_lastname,a_bdate,a_movie) VALUES ('$_POST[a_id]','$_POST[a_name]','$_POST[a_lastname]' ,'$_POST[a_bdate]' ,'$_POST[a_movie]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvd_shop/actorbio.php");
}

?>  