<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
    // mencari bilangan yang sama antara kedua variabel lalu dicetak
    echo "<b>Bilangan yang ada di kedua variabel</b><br>";
    $bilangan = array_intersect($bil1, $bil2);
    echo implode(', ', $bilangan);
    echo "<br>";
    // mencari bilangan yang tidak sama antara kedua variabel lalu dicetak
    echo "<b>Bilangan yang tidak ada di kedua variabel</b><br>";
    echo implode(", ", array_merge(array_diff($bil1, $bil2),array_diff($bil2,$bil1)));
    echo "<br>";
    ?>
</body>
</html>