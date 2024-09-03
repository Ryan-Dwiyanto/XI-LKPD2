<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = 5;
    for($i=1; $i <= 50 ; $i++){
        if ($i % 2 == 1){
            $hasil = $i * $angka;
            echo "$i X $angka = $hasil <br>";
        }
    }
    ?>
</body>
</html>