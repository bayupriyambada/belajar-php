<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php

    $angkaAwal = 1;

    // while loops
    while ($angkaAwal <= 20) {
        echo "Urutan Angka While Loops: " . $angkaAwal . "<br>";
        $angkaAwal++;
    }

    echo "<br>";
    // for loops
    for ($angkaAwal = 1; $angkaAwal <= 20; $angkaAwal++) {
        echo "Urutan Angka For Loops: " . $angkaAwal . "<br>";
    }
    echo "<br>";

    // foreach loops
    $arrayTeman = array('arya', 'nabil', 'ikhsan');
    foreach ($arrayTeman as $value) {
        echo $value . " - ";
    }

    ?>
</body>

</html>