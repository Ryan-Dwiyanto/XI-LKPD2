<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lama = 14;
    $jam = 8;
    echo "Lama Kerja : $lama Jam <br>";
    if ($lama > $jam) {
        $lebih = $lama - $jam;
        echo "Jam Lebih : $lebih Jam <br>";
        if ($lama > $jam + 1){
            $lebih = $lama - ($jam + 1);
            $kompensasi = 50000 + ($lebih * 25000);
            echo "Jumlah Kompensasi : Rp ".number_format($kompensasi, 0, ',','.');
        } else {
            $kompensasi = 50000;
            echo "Jumlah Kompensasi : Rp ".number_format($kompensasi, 0, ',','.');
        }
    } else {
        echo "Tidak Ada Uang Kompensasi";
    }
    ?>
</body>
</html>