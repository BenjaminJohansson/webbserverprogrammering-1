<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>
      <label for="in">Skriv in något för att sortera bokstäverna</label>
      <input type="text" name="in" id="in"
      placeholder="Test" />
      </p>

      <p>
      <input type="submit" value="Tryck här"/>
      </p>
      </form>

      <?php
      $in = filter_input(INPUT_POST, 'in', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);

              $arr = str_split($in);
              $ant2=count($arr);

                for ($j=0; $j < $ant2; $j++) { 
                  sort($arr);
                if(0 == (string)$arr[$j] && "0" != $arr[$j] && " " != $arr[$j]) {
                    echo $arr[$j]. " . ";
                }
                else if((int)$arr[$j] || "0" == $arr[$j] || " " == $arr[$j]) {
                    $null = $arr[$j];
                }
              }

        ?>
</body>
</html>