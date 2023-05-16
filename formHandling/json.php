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
    // json encode 
    $kelas = array(
        // 'key' => 'value'
        'x' => 'kelas x', // tangkap data x 
        'xi' => 'kelas xi',
        'xii' => 'kelas xii',
        'xiii' => 'kelas xiii',
        'xiv' => 'kelas xiv',
    );

    // kelas x, kelas xi , kelas xii
    // pakai foreach untuk perulangan data kelas array
    // echo json_encode($kelas['x']);

    foreach ($kelas as $value) {
        echo $value . "<br>";
    }

    echo "<br>";

    $kelasDecode = '{"x" : "angka 1", "xi":2, "xii": 3}';

    $object = json_decode($kelasDecode);
    print $object->{'x'};
    ?>
</body>

</html>