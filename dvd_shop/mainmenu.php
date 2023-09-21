<?php
    require 'conn.php';
    $sql = "SELECT * FROM memberid";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>DVD_Movie</title>
</head>

<body>
    <header>
        <h1>ระบบข้อมูล</h1>
        <nav>
            <ul>
                <li><a href="mainmenu.php">สมาชิก</a></li>
                <li><a href="actor.php">นักแสดง</a></li>
                <li><a href="movie.php">ภาพยนตร์</a></li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <h1>สมาชิค</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">อีเมล</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td>"."<td>".$row["name"]." ".$row["lastname"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a class='btn btn-warning' href='editbio.php?id=".$row["id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertbio.php'>Insert Member</a>
    </div>
</body>

</html>