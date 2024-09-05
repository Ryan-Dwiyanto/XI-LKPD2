<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Nama_1 = "Fema Flamelina Putri";
    echo "nama pertama : $Nama_1 <br>";
    $Nama_2 = "Artasya Legina";
    echo "nama kedua : $Nama_2 <br>";
    $Nama1 = str_replace(' ', '', $Nama_1);
    $Nama2 = str_replace(' ', '', $Nama_2);
    if (strlen($Nama1) > strlen($Nama2)) {
        $hasil = strlen($Nama1) - strlen($Nama2);
        echo "$Nama_1 memiliki jumlah karaketer lebih banyak dari $Nama_2 : selisih $hasil karakter";
    } elseif (strlen($Nama1) < strlen($Nama2)) {
        $hasil = strlen($Nama2) - strlen($Nama1);
        echo "$Nama_2 memiliki jumlah karaketer lebih banyak dari $Nama_1 : selisih $hasil karakter";
    } else {
        echo "Kedua nama memiliki jumlah karaketer yang sama yaitu : " . strlen($Nama1);
    };
    ?>
</body>

</html>