<!DOCTYPE html>
<html>
<head>
    <title>ค้นหาข้อมูลจากฐานข้อมูล</title>
</head>
<body>
    <h1>ค้นหาข้อมูล</h1>
    <form method="POST" action="search.php">
        <label for="keyword">คำค้น:</label>
        <input type="text" name="keyword" id="keyword">
        <input type="submit" value="ค้นหา">
    </form>

    <?php
    // ตรวจสอบว่ามีการส่งคำค้นมาจากฟอร์มหรือไม่
    if(isset($_POST['keyword'])){

        $conn = new mysqli('localhost','root','','dvd_shop');

        // ตรวจสอบการเชื่อมต่อ
        if ($conn->connect_error) {
            die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
        }

        // รับคำค้นจากฟอร์ม
        $keyword = $_POST['keyword'];

        // สร้างคำสั่ง SQL
        $sql = "SELECT * FROM dvd WHERE a_name LIKE '%$keyword%'";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $result = $conn->query($sql);

        // แสดงผลลัพธ์
        if ($result->num_rows > 0) {
            echo "<h2>ผลลัพธ์:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "ชื่อ: " . $row["d_name"] . "<br>";
            }
        } else {
            echo "ไม่พบข้อมูลที่ตรงกับคำค้น";
        }


        $conn->close();
    }
    ?>
</body>
</html>