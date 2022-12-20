<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// Prima stampate in pagina i dati, senza preoccuparvi dello stile.
var_dump($hotels);

// Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>
    <div class="text-center container py-5">
        <h1 class="pb-4">PHP HOTEL</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hotel name</th>
                    <th scope="col"> Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <!-- corpo tabella -->
            <tbody>

                <?php
                foreach ($hotels as $singleHotel) {
                ?>
                    <tr>
                        <th scope="row" class="text-start"><?php echo $singleHotel["name"] ?></th>
                        <td><?php echo $singleHotel["description"] ?></td>
                        <!-- se c'è parcheggio -->
                        <?php
                        if ($singleHotel["parking"]) {
                        ?>
                            <td><i class="fa-solid fa-check"></i></td>
                        <?php
                        }
                        ?>
                        <!-- se non c'è parcheggio -->
                        <?php
                        if ($singleHotel["parking"] === false) {
                        ?>
                            <td><i class="fa-solid fa-x"></i></td>
                        <?php
                        }
                        ?>
                        <td><?php echo $singleHotel["vote"]  ?> </td>
                        <td><?php echo $singleHotel["distance_to_center"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>