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
    echo "Classes Objects";
    echo "<br>";
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
    ?>
</body>

</html>