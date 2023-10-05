<?php
require 'conn.php';
$sql_update="INSERT INTO memberid(id,name,lastname,email,telephone) VALUES ('$_POST[id]','$_POST[name]','$_POST[lastname]' ,'$_POST[email]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {


header("refresh: 0; url=http://localhost/dvd_shop/mainmenu.php");
}

?>  