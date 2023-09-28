<?php
    require 'conn.php';
    $sql = "SELECT * FROM actorid";
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
    <meta a_name="viewport" content="wa_idth=device-wa_idth, initial-scale=1.0">
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
                    <a href="mainmenu.php">Member</a>
                    <a href="movie.php">Movie</a>
                    <a class="active" href="actorbio.php">Actor</a>

                </div>
        </div>
    </header>

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">วันเกิด</th>
                    <th scope="col-4">หนังที่เล่น</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["a_id"]."</td>"."<td>".$row["a_name"]." ".$row["a_lastname"]."</td>"."<td>".$row["a_bdate"]."</td>"."<td>".$row["a_movie"]."</td>"."<td>".
                                 "<a class='btn btn-warning' href='editactor.php?a_id=".$row["a_id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertactorbio.php'>Insert Actor</a>
    </div>
</body>

</html>