<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function mencariangka($teks){
        preg_match_all('/\d/', $teks, $angka);
        if (!empty($angka[0])){
            $angka = implode(', ', $angka[0]);
            echo "Teks Mengandung Angka $angka" ;
        } else {
            echo "Teks Tidak Mengandung Angka";
        }
    }

    $teks1 = "Selamat ulang tahun yang ke-17";
    $teks2 = "Selamat ulang tahun ya!";

    echo "Teks : $teks1 <br>";
    mencariangka($teks1);
    echo "<br>";
    echo "Teks : $teks2 <br>";
    mencariangka($teks2)
    ?>
</body>
</html>