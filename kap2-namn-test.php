<body>
<h1>Avsnitt 2.3: Namntest</h1>
<form action="?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p> 
<label for="name"> Vad heter du?</label>
<input type="text" name="name" id="name"
        placeholder="ex. Åke svensson" />
</p>
<p>
<input type="submit" value="testa namnet" />
</p> 
</form>
<?php
mb_internal_encoding("UTF-8");

function utf8_strrev($str) {
    preg_match_all('/./us', $str, $temp_arr);
    return join ('', array_reverse($temp_arr[0]));
}

$submitted_name = filter_input(INPUT_POST, 'NAME', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW);

$namedata = false;
if (!empty($submitted_name) ) {
    $submitted_name = trim($submitted_name);
    $output_name =htmlspecielchars($submitted_name, ENT_QOUTES);
    $charcount = mb_strlen($submitted_name);
    $name_revesed = utf8_strrev($submitted_name);
    $name_revesed = htmlspecialchars($name_revesed, ENT_QOUTES);
    $namedata = TRUE;
}
?>
<?php
if ( $namedata ) {
    echo<<<DATA
   <dl>
    <dt>Name</dt>
    <dd>{$output_name}</dd>
    <dt> antal tecken (inklusive ev. mellanslag i mitten)</dt>
    <dd>{$charcount}</dd>
    <dd>Namnet baklänges</dd>
    <dd>{$name_revesed}</dd>
    </dl>
DATA;
}
?>






</body>