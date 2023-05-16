<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <div style="margin-bottom: 3px;">
            <label for="nilai">Input Nilai</label>
            <input type="text" name="nilai" placeholder="Masukkan nilai kkm">
            <input type="text" name="siswa" placeholder="Masukkan siswa">
            <input type="submit" value="cek">
        </div>
    </form>

    <br>
    <h4>Cek nilai</h4>
    <?php
    if ($_GET) {
        $nilai = $_GET['nilai'];
        $siswa = $_GET['siswa'];
        if ($nilai >= 90 && $siswa) {
            $angka = "A+";
            $keterangan = "Tuntas";
        } else if ($nilai >= 80 && $siswa) {
            $angka = "B";
            $keterangan = "Tuntas";
        } else if ($nilai >= 75 && $siswa) {
            $angka = "C";
            $keterangan = "Tuntas";
        } else {
            $angka = "D";
            $keterangan = "Tidak Tuntas";
        }

        echo "Hasil kelulusan: <br>";
        echo "siswa: " . $siswa;
        echo "<br>";
        echo "Angka: " . $angka;
        echo "<br>";
        echo "Keterangan: " . $keterangan;
        echo "<br>";
        echo "Nilai: " . $nilai;
    }
    ?>
</body>

</html>