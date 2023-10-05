<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvd";
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
        <script>
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector(".header").style.top = "0";
              } else {
                document.querySelector(".header").style.top = "0"; // หรือความสูงที่คุณต้องการให้ header เลื่อนขึ้น
              }
            }
        </script>    

        <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: #f1f1f1;
  padding: 20px 10px;
  transition: top 0.3s;
  z-index: 999; /* กำหนดค่า z-index เพื่อให้ header อยู่บนสุด */
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
/////////////////////////////
@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&family=Sarabun:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap');

*{
    font-family: 'Sarabun', sans-serif;
}

.bg-mix-dark-1{
    background-color: #f1f1f1 !important;
    color: #black !important;
}

.table>:not(caption)>*>*{
    background-color: initial !important; /* หมายถึง ไม่มีการกำหนดค่า */
    color: #fff !important;
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
                    <a class="active" href="movie.php">Movie</a>
                    <a href="actorbio.php">Actor</a>

                </div>
        </div>
    </header>

       
        <div class="container my-5">
            <div class="row">
                <div class="col-12 p-md-5">
                
                </div>
                <div class="col-12 mt-7 p-md-7">
                    <div class="row">
                        <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $output = "<div class='col-md-4 mb-4'>"; 
                                    $output .= "<div class='card bg-mix-dark-1' style='height: 100%;'>";
                                    $output .= '<iframe width= "auto" height="auto" src="' . $row["d_url"] . '" frameborder="0" allowfullscreen mute autoplay></iframe>';
                                    $output .= "<div class='card-body'>";
                                    $output .= "<h6 class='card-title fw-bold'>"."รหัสหนัง ".$row["d_id"]."</h6>";
                                    $output .= "<h5 class='card-title fw-bold'>".$row["d_name"]."</h5>";
                                    $output .= "<p class='small card-text'>".$row["d_detail"]."</p>";
                                    $output .= "<h6 class='small card-text'>"."ระยะเวลา ".$row["d_duration"]."</h6>";
                                    $output .= "<p class='small card-text'>"."วันที่เข้าฉาย ".$row["d_date"]."</p>";
                                    $output .= "<div class='d-flex flex-column'>";
                                    $output .= "<a href='moviebuy.php?pid=".$row["d_id"]."' class='btn btn-primary mb-2'>สั่งซื้อหนัง "."</a>";
                                    //$output .= "<a href='movieedit.php?pid=".$row["d_id"]."' class='btn btn-success'>แก้ไขหนัง</a>";
                                    $output .= "</div>";
                                    $output .= "</div>";
                                    $output .= "</div>";
                                    $output .= "</div>";
                                    echo $output;
                                    
                                }
                            }else {
                                echo "0 results";
                            }
                            $conn->close();
                        ?>
                    </div>
            </div>
        </div>
</body>

</html>