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
    <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-wa_idth: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
        </style>
    <title>DVD_Movie</title>
</head>

<body>
    <header>
        <div class="header">
            <a href="index.php" class="logo">DVD Shop</a>
                <div>
                    <a class="active" href="mainmenu.php">Member</a>
                    <a href="movie.php">Movie</a>
                    <a href="actorbio.php">Actor</a>

                </div>
        </div>
    </header>


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">รหัสสมาชิก</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">อีเมล</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">แก้ไขข้อมูล</th>
                    <th scope="col-4">ลบข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td>"."<td>".$row["name"]." ".$row["lastname"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["telephone"]."</td>"
                            ."<td>"."<a class='btn btn-warning' href='editbio.php?id=".$row["id"]."'>แก้ไขข้อมูล</a>"
                            ."<td>"."<a class='btn btn-warning' href='deletebio.php?id=".$row["id"]."'>ลบข้อมูล</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertbio.php'>เพิ่มข้อมูลสมาชิก</a>
    </div>
</body>

</html>