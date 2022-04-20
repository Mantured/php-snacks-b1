<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php
$randomInt = [];

while(count($randomInt) < 15) {
    $newArrayRandomInt = rand(0, 99);
    /* (!in_array($newArrayRandomInt, $randomInt)) ? ($randomInt[] = $newArrayRandomInt); */
    if (!in_array($newArrayRandomInt, $randomInt)) {
        $randomInt[] = $newArrayRandomInt;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($randomInt);
    ?>
</body>
</html>

