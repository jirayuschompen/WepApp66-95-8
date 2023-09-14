<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #this is my first function
        function calSalary()
        {
            $mont = 12*65000;
            echo "this is my salary".$mont."bath";
        }
        #calling function 
        calSalary();

    ?>
</body>
</html>