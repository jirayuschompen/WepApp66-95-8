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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>
</head>

<body class="container">
            
        
<form id="form1" name="form1" method="post" action="deletesucce qss.php">
        <br>
        <p>

        <label for="id">รหัสสมาชิก</label>
        <input class="form-control" type="text" name="id" id="id" value="<?=$row['id'];?>" readonly/>


        </p>

        <p>

            <label for="name">ชื่อ</label>
            <input class="form-control" type="text" name="id" id="id" value="<?=$row['id'];?>" hidden>
            <input class="form-control" type="text" name="name" id="name" value="<?=$row['name'];?>" readonly/>

        </p>

        <p>

            <label for="lastname">นามสกุล</label>

            <input class="form-control" type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" readonly/>

        </p>

        <p>

            <label for="email">อีเมล</label>

            <input class="form-control" type="text" name="email" id="email" value="<?=$row['email'];?>" readonly/>

        </p>
    
        <p>

            <label for="telephone">เบอร์โทร</label>
            <input class="form-control" type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" readonly/>

        </p>
        <input type="submit" class="btn btn-success" value="ลบข้อมูล" id="deleteButton">
        <a class="btn btn-success" href='mainmenu.php'>ยกเลิก</a>
    </form>
    <script>
        const deleteButton = document.getElementById('deleteButton');
        const form = document.getElementById('form1');
        deleteButton.addEventListener('click', function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                    setTimeout(function() {
                    form.submit(); 
                    }, 1000);
                }
            });
        });
    </script>
</body>

</html>