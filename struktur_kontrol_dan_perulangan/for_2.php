<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $harga_sikat = 1500;
    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><td><b>Jumlah Sikat</b></td>";
    echo "<td><b>Harga</b></td></tr>";
    for (
        $jumlah_sikat = 10;
        $jumlah_sikat <= 100;
        $jumlah_sikat += 10
    ) {
    echo "<tr><td>";
    echo $jumlah_sikat;
    echo "</td><td>";
    echo "Rp. " . $harga_sikat * $jumlah_sikat;
    echo "</td></tr>";
    }
    echo "</table>";
    ?> 
</body>
</html>