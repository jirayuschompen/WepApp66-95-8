<?php
require 'conn.php';
$sql_update="UPDATE memberid SET name='$_POST[name]',lastname='$_POST[lastname]' ,email='$_POST[email]' ,telephone='$_POST[telephone]' WHERE id='$_POST[id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvd_shop/mainmenu.php");
}

?>