<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>

<body>
    <div style="margin-top: 10px;">
        <?php echo "Nama saya: " . $_POST['username'] ?>
        <?php echo "Email saya: " . $_POST['email'] ?>
    </div>
</body>

</html>