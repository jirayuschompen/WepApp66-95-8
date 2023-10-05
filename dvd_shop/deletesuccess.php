<?php
require 'conn.php';
$id = $_POST['id'];

$sql_delete = "DELETE FROM memberid WHERE id='$_POST[id]' ";

$result = $conn->query($sql_delete);

if (!$result) {
    die("Error God Damn it : " . $conn->error);
} else {

    header("refresh: 1; url=http://localhost/dvd_shop/mainmenu.php");
}
?>
