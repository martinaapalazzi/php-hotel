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
    $filteredHotels = [];
    foreach ($hotels as $iindex => $hotel) {
        if (
            isset($_GET['parking']) == true // se non è stringa null
            && 
            $_GET['parking'] != '' // se non è una stringa vuota
        ) {
            if (
                $hotel['parking'] == true
                &&
                $_GET['parking'] == 'yes'
                
            ) {
                $filteredHotels[] = $hotel;
            }
            else if (
                $hotel['parking'] == false
                &&
                $_GET['parking'] == 'no'
            ) {
                $filteredHotels[] = $hotel;
            }
        }
        else {
            $filteredHotels[] = $hotel;
        }
    };
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
                    echo '<li>'.$hotel['name'].' // '.$hotel['description'].' // '.$hotel['parking'].' // '.$hotel['vote'].' // '.$hotel['distance_to_center'].'</li>';
                }
            ?>

            <?php     
                //for ($i = 0; $i <= count($hotels); $i++){
                //    echo '<li>'.$hotels[$i]['name'].'</li>';
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
                    <?php
                        foreach ($filteredHotels as $hotel) {
                            if ($hotel['parking']== true){
                                $parkingIncluded = 'Yes';
                            }
                            else {
                               $parkingIncluded = 'No';
                            };

                            //echo "
                            //<tr>
                            //<td>$hotel[name]</td>
                            //<td>$hotel[description]</td>
                            //<td>$hotel[parking]</td>
                            //<td>$hotel[vote]</td>
                            //<td>$hotel[distance_to_center]</td>
                            //</tr>
                            //";

                            echo "<tr>";
                            echo "<td>".$hotel['name']."</td>";
                            echo "<td>".$hotel['description']."</td>";
                            echo "<td>".$parkingIncluded."</td>"; // echo "<td>".($hotel['parking'] == true ? 'Yes' : 'No')."</td>";
                            echo "<td>".$hotel['vote']."</td>";
                            echo "<td>".$hotel['distance_to_center']."</td>";
                            echo "</tr>";   
                        }
                    ?>
            </tbody>
        </table>
    </div>

    <div>
        <form action="" method="GET">
            <div>
                <label for="parking">Parking:</label>
                <select name="parking" id="parking">
                    <option value="">Don't mind</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div>
                <button type="submit">
                    Filter!
                </button>
            </div>
        </form>
    </div>
    
    
</body>
</html>