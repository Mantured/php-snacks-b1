<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $text = "The fallen leaves tell a story. The great Elden Ring was shattered.In our home, across the fog, the Lands Between.Now, Queen Marika the Eternal is nowhere to be found,and in the Night of the Black Knives, Godwyn the Golden was the first to perish.Soon, Marika's offspring, demigods all, claimed the shards of the Elden Ring.The mad taint of their newfound strength triggered the Shattering.A war from which no lord arose.A war leading to abandonment by the Greater Will.Arise now, ye Tarnished.Ye dead, who yet live.The call of long-lost grace speaks to us all.Hoarah Loux, chieftan of the badlands.The ever-brilliant Goldmask.Fia, the Deathbed Companion.The loathsome Dung Eater.And Sir Gideon Ofnir, the All-knowing.And one other. Whom grace would again bless. A Tarnished of no renown. Cross the fog, to the Lands Between. To stand before the Elden Ring. And become the Elden Lord";

    $paragraphsArray= explode('.', $text);

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
    <p>
        <?php var_dump($paragraphsArray) ?>
    </p>
    <!-- more pretty ^^ <3  -->
    <?php for ($i = 0; $i < count($paragraphsArray); $i++) {?>
        <ul>
            <li><?php echo $paragraphsArray[$i]?></li>
        </ul>
    <?php }?>

</body>
</html>