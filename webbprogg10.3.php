<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    interface SomeIF
    {
        public function doSomething();
    }

    class FooClass implements SomeIF
    {
        public $a = "Säger Foo till alla \n";
        private $b = "Säger Foo till mig \n";
        protected $c = "Säger Foo till barnen \n";

        public function doSomething()
        {
            echo "Jag gör nåt!\n";
        }
    }

    class SubClass extends FooClass
    {
        protected $c ="Säger Sub till barnen\n";
    }
    $sub = new SubClass();
    if ($sub instanceof FooClass) {
        echo "Ja, \$sub är också en instans av klassen FooClass.\n <br>";
    }


    $foo = new FooClass();

    if ( is_a($foo, "FooClass") ) {
        echo "Ja, \$foo är en instans av klassen FooClass.\n <br>";
    }

    if ( $foo instanceof FooClass ) {
        echo "Ja, \$foo är en instans av klassen FooClass.\n <br>";
    }

    if ($sub instanceof SomeIF ) {
        echo "Ja, \$sub är också en instans av interfacet SomeIF.\n <br>";
    }

    function mustHaveFoo(FooClass $obj)
    {
        echo "Fick Foo i form av " . get_class($obj) . "\n <br>";
    }

    $bar = "String";
    mustHaveFoo($foo);
    mustHaveFoo($sub);

    //mustHaveFoo($bar); ERROR


    ?>
</body>
</html>