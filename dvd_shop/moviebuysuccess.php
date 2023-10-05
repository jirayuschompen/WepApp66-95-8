<?php
require 'conn.php';


if (isset($_POST['m_id']) && isset($_POST['d_id'])) {
    $m_id = $_POST['m_id'];
    $d_id = $_POST['d_id'];
    
    // Prepare and execute the SQL query
    $sql_update = "INSERT INTO member_dvd (m_id, d_id) VALUES ('$m_id', '$d_id')";
    $result = $conn->query($sql_update);
    
    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        
        header("refresh: 0; url=http://localhost/dvd_shop/mainmenu.php");
    }
} else {
    echo "Error: Missing required POST data.";
}
?>
