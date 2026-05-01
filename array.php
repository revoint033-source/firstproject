<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action = "array.php" method = "post">
        <input type ="text" name = "student" > <br>
        <input type  = "submit" >
</form>
<?php
$grades = array("Jim" =>"A+", "Della" => "B+", "Mim" => "C+");
echo $grades[$_POST["student"]];
?>
</head>
<body>
    
</body>
</html>