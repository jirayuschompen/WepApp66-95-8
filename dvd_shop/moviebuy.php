<?php
    require 'conn.php';
    $sql = "SELECT * FROM member_dvd";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
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
    <form id="form1" name="form1" method="post" action="moviebuysuccess.php">
        
        <p>
            <input type="text" name="mb_id" id="mb_id" hidden>
        </p>

        <p>

            <label for="pid">รหัสสมาชิก</label>
            <input class="form-control" type="text" name="m_id" id="m_id">

        </p>
        
        <p>
            <label for="movieid">รหัสหนัง</label>
            <input class="form-control" type="text" name="d_id" id="d_id" value="<?php echo isset($_GET['d_id']) ? $_GET['d_id'] : ''; ?>"/>

        </p>
        <input type="submit" class="btn btn-success" value="สั่งซื้อ">
        <a class="btn btn-success" href='movie.php'>กลับหน้าหลัก</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
    <script>
        // JavaScript for displaying Swal alert after form submission
        document.querySelector('#form1').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission for now
            
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your purchase has been success',
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