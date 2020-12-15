<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function do_nothing()
    {
        $a = 2;
        return true;
    }
    $a = 1;
    do_nothing();
    echo $a; // 1, inte 2
    ?>
</body>
</html>