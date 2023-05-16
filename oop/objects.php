<?php

class dealerCar
{
    public $nameCar;
    public $capacity;

    function buyCar()
    {
        echo "Mobil tersedia, silahkan beli.";
    }

    function typeCar()
    {
        echo "Tersedia pilihan tipe kapasitas mobil.";
    }
}
$buy = new dealerCar();
$buy->buyCar();
echo "<br>";
$buy->nameCar = "Honda Civic 2023";
echo "<br>";
$buy->capacity = 2;
echo "<br>";
echo "Berhasil membeli " . $buy->nameCar . ' dengan kapasitas ' . $buy->capacity;

echo "<br>";
// cara 2 
// echo "Berhasil membeli " . $buy->nameCar = "Honda Civic 2023"  . ' dengan kapasitas ' . $buy->capacity = 2;

// "Berhasil membeli Honda Civic 2023 dengan kapasitas 2