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

    class Notification
    {
        const personal = "Sekarang saya sedang belajar web development";
    }
    interface School
    {
        public function makePersonal();
    }

    class Introduce implements School
    {
        public function makePersonal()
        {
            echo Notification::personal;
        }
    }
    $school = new Introduce();
    $school->makePersonal();
    ?>
</body>

</html>