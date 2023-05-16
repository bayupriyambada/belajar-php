<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // metode static cara 1
    class methodStatic
    {
        public static function oopStatic()
        {
            echo "Belajar tentang oop static method";
        }
    }
    methodStatic::oopStatic();
    echo "<br>";

    // metode static cara 2
    class methodStatic2
    {
        public static $oop = "Belajar tentang oop static melalui self";
        public static function oopStatic2()
        {
            echo self::$oop;
        }
    }
    methodStatic2::oopStatic2();
    ?>

</body>

</html>