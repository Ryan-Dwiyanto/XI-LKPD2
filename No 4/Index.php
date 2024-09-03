<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for ($i=1; $i <=2; $i++){
            for($a=10; $a >=1; $a--){
                $hasil = $a * $i;
                echo "$a X $i = $hasil <br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>