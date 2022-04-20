<!-- /**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
**/ -->


<?php 
    $matches = [
        [
            "team_1" =>  "Olimpia Milano",
            "team_2" =>  "Virtus Roma",
            'score_team_1' => 101,
            'score_team_2' => 83,
        ],
        [
            "team_1" =>  "Treviso",
            "team_2" =>  "Ginn. Triestina",
            'score_team_1' => 90,
            'score_team_2' => 76,
        ],
        [
            "team_1" =>  "Portogruaro Pallacanestro",
            "team_2" =>  "Virtus Udine",
            'score_team_1' => 130,
            'score_team_2' => 83,
        ],
        [
            "team_1" =>  "Virtus Roma",
            "team_2" =>  "Olimpia Milano",
            'score_team_1' => 90,
            'score_team_2' => 58,
        ],
    ]
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
    <?php for ($i = 0; $i < count($matches) ; $i++) { ?>
        <li> <?php echo $matches[$i]['team_1']. ' - '. $matches[$i]['team_2'];?> |
        <?php echo $matches[$i]['score_team_1']. '-'. $matches[$i]['score_team_2'];?></li>
    <?php } ?>

</body>
</html>