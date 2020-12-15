<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$webpage1 = new StdClass(); // inbyggd klass i php
$webpage1 -> name = "PHP";
$webpage1 -> url ="http://php.net/";
$webpage1-> rank = 5;

class webpage{
    public $name;

    public $url;

    public $rank;

    public function __construct($name, $url, $rank)
    {
        $this->name = $name;
        $this->url = $url;
        $this->rank = $rank;
    }

    public function getLink()
    {
    return "<a href=\"{$this->url}\">{$this->name}</a>";
    }
}

$php_net = new webpage("PHP", "http://php.net/", 5);
$example = new webpage("Exempel", "http://example.com/", 3);

echo $php_net->name; //PHP
echo "<br>";
echo "<a href=\"{$example->url}\">{$example->name}</a>";// Länken

echo "<br>";




echo $php_net->getLink();
echo $example->getLink();
?>
</body>
</html>