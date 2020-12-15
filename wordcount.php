<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Räkna</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h2>Ordräknare</h2>
    <form action="wordcount.php" method="POST">
        <label for="ord">Skriv in en mening:</label>
        <input type="text" name="ord">
        <button type="submit">Räkna</button>
    </form>

    
    <?php
        // FIltrera input
        $submitted_ord = filter_input(INPUT_POST, 'ord', FILTER_UNSAFE_RAW, 
                                    FILTER_FLAG_STRIP_LOW);
        // Om det finns ett nummer; Skriv ut ett medelande
        if (!empty($submitted_ord)) {
            echo "<h2>Output</h2>";
            $antalOrd = str_word_count($submitted_ord);
            echo "Antal ord i ({$submitted_ord}) är: {$antalOrd}";
            
            
        }

    ?>
</body>
</html>