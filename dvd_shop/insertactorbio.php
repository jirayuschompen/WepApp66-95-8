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
    <form id="form1" name="form1" method="post" action="insertactorbiosuccess.php">
        
        <p>


            <input type="text" name="a_id" id="a_id" hidden>

        </p>

        <p>

            <label for="a_name">ชื่อ</label>
            <input type="text" name="a_name" id="a_name">

        </p>

        <p>

            <label for="a_lastname">นามสกุล</label>

            <input type="text" name="a_lastname" id="a_lastname">

        </p>

        <p>

            <label for="a_bdate">วันเกิด</label>

            <input type="date" name="a_bdate" id="a_bdate">

        </p>

        <p>

            <label for="a_movie">หนังที่เล่น</label>

            <input type="text" name="a_movie" id="a_movie">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='actorbio.php'>Home</a>
    </form>
</body>

</html>