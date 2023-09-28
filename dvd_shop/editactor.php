<?php
if(!isset($_GET['a_id'])){
    header("refresh: 0; url=http://localhost/dvd_shop/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM actorid WHERE a_id='$_GET[a_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
            
        
<form id="form1" name="form1" method="post" action="editactorsuccess.php">
        <p>

        <label for="id">ID</label>
        <?php echo $row["a_id"]?>

        </p>

        <p>

            <label for="a_name">ชื่อ</label>
            <input type="text" name="a_id" id="a_id" value="<?=$row['a_id'];?>" hidden>
            <input type="text" name="a_name" id="a_name" value="<?=$row['a_name'];?>" />

        </p>

        <p>

            <label for="a_lastname">นามสกุล</label>

            <input type="text" name="a_lastname" id="a_lastname" value="<?=$row['a_lastname'];?>" />

        </p>

        <p>

            <label for="a_bdate">วันเกิด</label>

            <input type="date" name="a_bdate" id="a_bdate" value="<?=$row['a_bdate'];?>" />

        </p>
    
        <p>

            <label for="a_movie">หนังที่เล่น</label>
            <input type="text" name="a_movie" id="a_movie" value="<?=$row['a_movie'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>