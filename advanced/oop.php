<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <?php

    // classes & objects
    class functionCar
    {
        public $nameCar;
        public $capacityCarSheet;
        function buyCar()
        {
            echo "Car is ready buy.";
        }

        function typeCar()
        {
            echo "Type car is sport";
        }
    }

    $newCar = new functionCar();
    $newCar->nameCar = "Civic 2020";
    $newCar->capacityCarSheet = 4;

    echo "You successfully buy car: " . $newCar->nameCar . "<br>";
    echo "And capacity in car: " . $newCar->capacityCarSheet . "<br>";
    $newCar->buyCar();
    echo "<br>";
    $newCar->typeCar();

    echo "<br>";
    // definisi kelas "person"
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

    // access modifier
    class Fruits
    {
        public $name;
        protected $color;
        private $weight;
    }

    $mango = new Fruits();
    $mango->name = 'Mango'; // OK
    // $mango->color = 'Yellow'; // ERROR
    // $mango->weight = '300'; // ERROR
    ?>
</body>

</html>