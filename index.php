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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Hotel</title>
</head>
<body>

    <div>
        <ul>
            <?php
                foreach ($hotels as $hotel){
                    echo '<li>'.$hotel['name'].', '.$hotel['description'].', '.$hotel['parking'].', '.$hotel['vote'].', '.$hotel['distance_to_center'].'</li>';
                }
            ?>

            <?php     
                //for ($i = 0; $i <= count($hotels); $i++){
                //    echo '<li>'.$i['name'].'</li>';
                //}
            ?> 
        </ul>   
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>

                <?php
                    //echo '<tr>'.'<th scope="col">'.array_keys($hotels[0]).'</th>'.'</tr>'
                ?>
            </thead>
            <tbody>

                <tr>
                    <?php
                        foreach ($hotels as $hotel) {
                            //if ($hotel['parking']== true){
                            //    $parkingIncluded = 'Yes';
                            //}
                            //else ($hotel['parking']== false){
                            //    $parkingIncluded = 'No'
                            //};
                            echo "<td>$hotel[name]</td>
                            <td>$hotel[description]</td>
                            <td>$hotel[parking]</td>
                            <td>$hotel[vote]</td>
                            <td>$hotel[distance_to_center]</td>
                            </tr>
                            ";
                        }
                    ?>
            </tbody>
        </table>
    </div>

    <div>
        <form action="" method="GET">
            <button class="p-1">
                HOTELS WITH PARKING INCLUDED
            </button>
        </form>
    </div>
    <div>
        <?php 
            $parkingTrue = true;

            if ($_GET['parking'] == true) {
                echo '<div>'.$hotel['parking'].'</div>';
            }
        ?>
    </div>
    
</body>
</html>