<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$card_asked_for = 9;
$player_1_cards = array(2,6,7,8,9,1,11,2,9);
$player_2_cards = array(1,3,7,8,9,9,4,2,1);

if( !in_array($card_asked_for, $player_1_cards, true)) {
    //Exit ("FUSK!")
    //man får inte fråga efter kort man själv inte har
    //!= om inte
    echo "FuSk!!!";
}
if (in_array($card_asked_for, $player_2_cards, true )) {
    echo "Ger det efterfrågade kortet"; //Vad som händer i denna kod
//spelare två ger si a efterfrågade kort till spelare ett

} else{
    //spelare drar ur sjön
    echo "spelare ett drar ett kort ur sjön";
}
?>
</body>
</html>


