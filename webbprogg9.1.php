<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function say_hello($name)
    {
        return "Hej {$name}";
    }
    echo say_hello("Ada <br>"); //"Hej ADa"
    echo say_hello("Beda") //Hej Beda
    ?>
</body>
</html>