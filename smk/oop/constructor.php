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
    echo "Constructor";
    echo "<br>";
    class personIntroduce
    {
        // definisi properti
        public $name;
        public $type;
        public $school;
        // properti construct bisa 1, 2, 3 dan seterusnya
        function __construct($name, $type, $school)
        {
            $this->name = $name;
            $this->type = $type;
            $this->school = $school;
            echo "Data personal sudah dibuat!";
            echo "<br>";
        }
        // metode
        public function introduce()
        {
            echo "Perkenalkan nama saya " . $this->name .
                " Saat ini sebagai " . $this->type .
                " sekolah di " . strtoupper($this->school);
        }
    }
    $person = new personIntroduce("Bayupm", "guru", "smk ti bazma");
    $person->introduce();
    ?>
</body>

</html>