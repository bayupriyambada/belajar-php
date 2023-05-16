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
    class Personal
    {
        public $name;
        public $dream;

        public function __construct($name, $dream)
        {
            $this->name = $name;
            $this->dream = $dream;
        }

        public function introduce()
        {
            echo "Perkenalkan nama saya " . $this->name . " dan cita-cita saya saat ini " . $this->dream;
        }
    }
    $personal = new Personal('Bayu', "menjadi progammer");
    $personal->introduce();
    ?>
</body>

</html>