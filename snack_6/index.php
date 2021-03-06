<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

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

    <!-- css style -->

    <style>
        .teachers{
            background-color: grey;
        }
        .pm{
            background-color: green;
        }
        .container{
            width: 200px;
        }
    </style>
    <main>
        <h1>Teachers</h1>
        <div class="container">
            <?php for ($i = 0; $i < count($db['teachers']); $i++) {?>
                <pre class = "teachers"> <?php echo $db['teachers'][$i]['name']?> <?php echo $db['teachers'][$i]['lastname']?></pre>
            <?php } ?>
        </div>
        <h1>PM</h1>
        <div class="container">
            <?php for ($i = 0; $i < count($db['pm']); $i++) {?>
                <pre class = "pm"> <?php echo $db['pm'][$i]['name']?> <?php echo $db['pm'][$i]['lastname']?></pre>
            <?php } ?>
        </div>
    </main>
</body>
</html>