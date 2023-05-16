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
    $hari = "sabtu";

    switch ($hari) {
        case "senin":
            echo "Sekarang hari senin";
            break;
        case "selasa":
            echo "Sekarang hari selasa";
            break;
        case "rabu":
            echo "Sekarang hari rabu";
            break;
        case "kamis":
            echo "Sekarang hari kamis";
            break;
        case "jumat":
            echo "Sekarang hari jumat";
            break;
        default:
            echo "Hari Libur";
            break;
    }

    ?>
</body>

</html>