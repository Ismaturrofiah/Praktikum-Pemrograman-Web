<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $stringku = "ABCDEFGHIJ";
    $posisi = strpos($stringku, "F");
    echo $stringku . "<br>";
    echo "Posisi karakter F dalam string adalah indeks ke- $posisi";
    ?>
</body>
</html>