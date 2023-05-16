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
    $remaja = 18;
    if ($remaja >= 17) {
        echo "umur sudah memasuki remaja";
    } else {
        echo "umur belum mencukupi remaja";
    }

    echo "<br>";

    $waktu = 23; // waktu 24 jam
    if ($waktu <= 10) {
        echo "Selamat Pagi";
    } elseif ($waktu < 22) {
        echo "Menikmati kehidupan seharian";
    } else {
        echo "Selamat tidur";
    }

    // penilaian KKM

    echo "<br>";

    if ($kkm >= 90) {
        echo "grade = A";
        echo "<br>";
        echo "keterangan = Tuntas";
        echo "<br>";
    } else if ($kkm >= 85) {
        echo "grade = A-";
        echo "<br>";
        echo "keterangan = Tuntas";
        echo "<br>";
    } else if ($kkm >= 80) {
        echo "grade = A";
        echo "<br>";
        echo "keterangan = Tuntas";
        echo "<br>";
    } else if ($kkm >= 75) {
        echo "grade = B+";
        echo "<br>";
        echo "keterangan = Tuntas";
        echo "<br>";
    } else {
        echo "keterangan = Tidak Tuntas";
    }

    ?>
</body>

</html>