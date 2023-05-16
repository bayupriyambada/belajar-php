<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>

<body>
    <?php
    $username = $email = $class = '';
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $username = inputType($_GET['username']);
        $email = inputType($_GET['email']);
        $class = inputType($_GET['class']);
    }

    function inputType($input)
    {
        // trim hapus spasi pada karakter terakhir : "misal!  " => "misal"
        $input = trim($input);
        // stripsplashes untuk menghilang blackslah (/) : "it\'s problem" => "it's problem"
        $input = stripslashes($input);
        // htmlspesialchars untuk mengkonversi sifat karakter yang merugikan adanya XSS (cross-site scripting)
        $input = htmlspecialchars($input);
        return $input;
    }
    ?>
    <h4>Form Validation</h4>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        Name: <input type="text" name="username" placeholder="Username">
        Email: <input type="text" name="email" placeholder="Email">
        Class: <input type="number" name="class" placeholder="Class">
        <input type="submit" value="Simpan">
    </form>
    <?php
    echo "Nama saya: " . $username;
    echo "<br>";
    echo "Email saya: " . $email;
    echo "<br>";
    echo "Kelas saya: " . $class;
    echo "<br>";
    ?>
</body>

</html>