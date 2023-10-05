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

        <label for="id">รหัสสมาชิก</label>
        <input class="form-control" type="text" name="id" id="id" value="<?=$row['id'];?>" readonly/>

        </p>

        <p>

            <label for="name">ชื่อ</label>
            <input class="form-control" type="text" name="id" id="id" value="<?=$row['id'];?>" hidden>
            <input class="form-control" type="text" name="name" id="name" value="<?=$row['name'];?>" />

        </p>

        <p>

            <label for="lastname">นามสกุล</label>

            <input class="form-control" type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" />

        </p>

        <p>

            <label for="email">อีเมล</label>

            <input class="form-control" type="text" name="email" id="email" value="<?=$row['email'];?>" />

        </p>
    
        <p>

            <label for="telephone">เบอร์โทร</label>
            <input class="form-control" type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>กลับหน้าหลัก</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
    <script>
        // JavaScript for displaying Swal alert after form submission
        document.querySelector('#form1').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission for now
            
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your information has been saved',
                showConfirmButton: false,
                timer: 1500
            });

            setTimeout(function() {
                // After the alert is displayed, submit the form
                document.querySelector('#form1').submit();
            }, 1500); // Adjust the timer as needed
        });
    </script>

</body>

</html>