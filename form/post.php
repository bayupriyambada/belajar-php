<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling (POST)</title>
</head>

<body>

    <!-- method post -->
    <form method="POST" action="./post-type.php">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div style="margin-bottom: 3px;">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email">
        </div>
        <input type="submit" value="simpan">
    </form>

</body>

</html>