<?php
require 'conn.php';

// Check if m_id and d_id are set in the POST data
if (isset($_POST['m_id']) && isset($_POST['d_id'])) {
    $m_id = $_POST['m_id'];
    $d_id = $_POST['d_id'];
    
    // Prepare and execute the SQL query
    $sql_update = "INSERT INTO member_dvd (m_id, d_id) VALUES ('$m_id', '$d_id')";
    $result = $conn->query($sql_update);
    
    if (!$result) {
        die("Error: " . $conn->error);
    } else {
        echo "Buy Success <br>";
        header("refresh: 1; url=http://localhost/dvd_shop/mainmenu.php");
    }
} else {
    echo "Error: Missing required POST data.";
}
?>
