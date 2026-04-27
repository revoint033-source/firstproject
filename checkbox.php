<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action = "checkbox.php" method  = "post">
        Apple: <input type  = "checkbox" name = "fruits[]" value  = "apple"> <br>
        Orange: <input type  = "checkbox" name = "fruits[]" value  = "orange"> <br>
        Pear: <input type  = "checkbox" name = "fruits[]" value  = "pear"> <br>
        
        <input type = "submit" >
        </form>

        <?php
        $fruits  = $_POST["fruits"];
        echo $fruits[0];
        ?>

</head>
<body>
    
</body>
</html>