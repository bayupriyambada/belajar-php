<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Required</title>
</head>

<body>
    <?php
    $usernameError = $emailError = $classError = '';
    $username = $email = $class = '';
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (empty($_POST['username'])) {
            $usernameError = "username tidak boleh kosong";
        } else {
            $username = inputType($_POST['username']);
        }
        if (empty($_POST['email'])) {
            $emailError = "email tidak boleh kosong";
        } else {
            $email = inputType($_POST['email']);
        }
        if (empty($_POST['class'])) {
            $classError = "Kelas tidak boleh kosong";
        } else {
            $class = inputType($_POST['class']);
        }
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        Name: <input type="text" name="username" placeholder="Username">
        <br>
        <span style="color: red; font: size 12px;"><?php echo $usernameError ?></span>
        Email: <input type="text" name="email" placeholder="Email">
        <br>
        <span style="color: red; font: size 12px;"><?php echo $emailError ?></span>
        Class: <input type="number" name="class" placeholder="Class">
        <br>
        <span style="color: red; font: size 12px;"><?php echo $classError ?></span>
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