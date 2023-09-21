<?php
if(!isset($_GET['id'])){
    header("refresh: 0; url=http://localhost/dvd_shop/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM memberid WHERE id='$_GET[id]'";
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
            
        
<form id="form1" name="form1" method="post" action="editsuccess.php">
        <p>

        <label for="id">ID</label>
        <?php echo $row["id"]?>

        </p>

        <p>

            <label for="name">ชื่อ</label>
            <input type="text" name="id" id="id" value="<?=$row['id'];?>" hidden>
            <input type="text" name="name" id="name" value="<?=$row['name'];?>" />

        </p>

        <p>

            <label for="lastname">นามสกุล</label>

            <input type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" />

        </p>

        <p>

            <label for="email">อีเมล</label>

            <input type="text" name="email" id="email" value="<?=$row['email'];?>" />

        </p>

        <p>

            <label for="telephone">เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>