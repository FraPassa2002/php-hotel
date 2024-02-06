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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <h1>
        HOTEL :
    </h1>

    <ul>
        <?php
        // foreach ($hotels as $singleHotel) {
        //     echo '<li>'.$singleHotel['name'].$singleHotel['description'].$singleHotel['parking'].$singleHotel['vote'].$singleHotel['distance_to_center'].'</li>';

        // }

        // echo '<br><br>';

        foreach ($singleHotel as $indHotel => $valueHotel) {
            echo '<li>' . $indHotel . '  ' . $valueHotel . '</li>';
        }
        ?>
    </ul>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class=" bg-black text-white  "> Nome Hotel </th>
                <?php foreach ($hotels as $singleHotel) { ?>
                    <th scope="row"><?php echo $singleHotel['name']; ?></th>

                <?php  } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class=" bg-black text-white  "> Descrizione Hotel </th>
                <?php foreach ($hotels as $singleHotel) { ?>

                    <td scope="row"><?php echo $singleHotel['description']; ?></td>

                <?php  } ?>
            </tr>
            <tr>
                <th class=" bg-black text-white  "> Parcheggio Hotel </th>
                <?php foreach ($hotels as $singleHotel) { ?>

                    <td scope="row"><?php echo $singleHotel['parking']; ?></td>

                <?php  } ?>
            </tr>
            <tr>
                <th class=" bg-black text-white  "> Voto Hotel </th>
                <?php foreach ($hotels as $singleHotel) { ?>

                    <td scope="row"><?php echo $singleHotel['vote']; ?></td>

                <?php  } ?>
            </tr>
            <tr>
                <th class=" bg-black text-white  "> Distanza dal centro </th>
                <?php foreach ($hotels as $singleHotel) { ?>

                    <td scope="row"><?php echo $singleHotel['distance_to_center'].' km'; ?></td>

                <?php  } ?>
            </tr>




        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>