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
    $arrayTampung = array("Bintang", "Arya", "Arif", "Syahru");
    $implode = implode(", ", $arrayTampung);  // bintang, arya, arif, syahru
    echo $implode;
    ?>
</body>

</html>