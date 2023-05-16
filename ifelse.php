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
    // if 
    $nilai = 78;
    if ($nilai >= 75) {
        echo "Kamu dibawah KKM";
    } else {
        echo "Kamu sudah diatas KKM";
    }

    echo "<br>";

    $waktu = 10;
    if ($waktu <= 10) {
        echo "Selamat Pagi";
    } else {
        echo "Selamat Siang";
    }
    echo "<br>";
    // elseif
    $nilaiTugas = 95;
    if ($nilaiTugas >= 90) {
        echo "Selamat, kamu nilainya bagus! (A)";
    } elseif ($nilaiTugas >= 85) {
        echo "Selamat, kamu nilainya cukup bagus! (A-)";
    } elseif ($nilaiTugas >= 80) {
        echo "Selamat, kamu nilainya bagus! (B)";
    } elseif ($nilaiTugas >= 75) {
        echo "Selamat, kamu nilainya kurang bagus! (C)";
    } else {
        echo "Selamat, kamu remedial";
    }

    // switch
    $hari = "senin";
    switch ($hari) {
        case 'senin':
            echo "Hari ini adalah senin";
            break;
        case 'selasa':
            echo "Hari ini adalah selasa";
            break;
        case 'rabu':
            echo "Hari ini adalah rabu";
            break;
        case 'kamis':
            echo "Hari ini adalah kamis";
            break;
        case 'jumat';
            echo "Hari ini adalah jumat";
            break;
        default:
            echo "Hari weekend libur! Jangan ganggu!.";
            break;
    }
    ?>


</body>

</html>