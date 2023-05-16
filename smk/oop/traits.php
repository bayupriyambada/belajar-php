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
        const OOP = "OOP is so funny to learn";
    }
    trait Personal
    {
        public function oop()
        {
            echo Notification::OOP;
        }
    }

    class PersonalClass
    {
        use Personal;
    }

    $personal = new PersonalClass();
    $personal->oop();

    ?>
</body>

</html>