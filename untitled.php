<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Menyisipkan PHP Pada HTML</title>
</head>
<body>
    <?php
        $namad= "ujang";
        $namat= 2000;
        $namab= "budiman";
    ?>
    <b>Ini adalah kelas Pemprograman Web 2 UNPAM.<br>
    <?= "Saya $namab, $namad $namat $namab, Ketua kelas .</br>"; ?>
</body>
</html>