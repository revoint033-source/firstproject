<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action = "form.php" method  = "get">
        Name: <input type  = "text" name = "name"> <br>
        office: <input type  = "number" name = "number"><br>
        <input type = "submit" >
</form>
 <?php
   $name  = $_GET["name"];
   $number =  $_GET["number"] ;
   echo "Today is $name <br>"; 
   echo "Office starts from $number";

 
 ?>
</head>
<body>
    
</body>
</html>