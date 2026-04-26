<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action = "form.php" method  = <get>
        Days_name: <input type  = "text" name = "days_name"> <br>
        Temperature: <input type  = "number" name = "temperature"><br>
        <input type = "submit" >
</form>
 <?php
   $days_name  = $_GET["days_name"];
   $temperature=  $_GET["temperature"] ;
   echo "Today is $days_name <br>"; 
   echo "Today's temperature is $temperature degree";

 
 ?>
</head>
<body>
    
</body>
</html>