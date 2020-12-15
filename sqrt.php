<html>
<head>
<title>Roten ur tal</title>
</head>
<body>
<form method="post" action="">
<label>Mata in ett tal</label>
<input type="number" name="input" value="" />
<input type="submit" name="submit" value="Klicka" />
</form>
<?php
if(isset($_POST['submit'])) {
//Bevarar talet i funktionen
$input = $_POST['input'];
//Bevarar roten ur talet
$ans = sqrt($input);

echo 'Roten av  '.$input.' = '.$ans;
}
?>
</body>
</html>


  
