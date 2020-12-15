<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function amnesiac()
    {
        if ( !isset($times)){
            $times = 0;
        }
        return ++$times;
    }

    function remembering()
    {
        static $times;
        if ( !isset($times) ) {
            $times = 0;
        }
        return ++$times;
    }

    echo amnesiac() . "\n";
    echo amnesiac() . "\n";
    echo amnesiac() . "\n";
    echo remembering() . "\n";
    echo remembering() . "\n";
    echo remembering() . "\n";


    ?>
</body>
</html>