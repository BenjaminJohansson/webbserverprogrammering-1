<?php
    header("Content-type: text/plain; charset=utf-8");
    $dbh = new PDO('mysql:host=localhost;dbname=laxhjalpen; charset=utf8', 'phpuser', 'Hejhej11');
    if ( ! $dbh ) {
        echo "Kontakt ej etablerad";
        exit;
    }
    echo "Kontakt etablerad. Hurra!";

    //Felmeddelanden från PDO => Inga fel = en array med bara nycklar
    print_r($dbh->errorInfo())

    //Förbered en SQL-fråga att stälal till databasen
    $sql ="SELECT * FROM articles ORDER BY pubdate DESC";
    $stmt  = $dbh->prepare($sql);
    //Utför frågan
    $stmt->execute();
    //Loopa igenom resultatet och dumpa varje rad
    while ( $article = $stmt->fetch()) {
        var_dump($article)
    }
?>
