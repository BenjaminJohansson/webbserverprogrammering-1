<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Foo
    {
        public $a = "Hej\n"; //Här skrivs inte $this

        public function sayA() 
        {
            return $this->a; // alltså samma som $a ovan
        }

        public function useSayA()
        {
            return $this->sayA(); //$this används också för metoder
        }

    }
    $foo = new Foo();
    echo $foo->a; //Blir $this->a inuti objektet
    echo $foo->sayA(); //Använder $tis->a inuti objektet
    echo $foo->useSayA(); //Använder $this->SayA() inuti objektet

    ?>
</body>
</html>