<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">City</th>
                <th scope="col">Total Distance</th>

            </tr>
        </thead>

        <tbody>
            <?php 
                $cities = array(
                    array(2.5,5),
                    array(5.1,3),
                    array(1,9),
                    array(5.4,5.4),
                    array(5.5,2.1),
                );

                $distance = array();
                $sum = 0;
                $min = PHP_INT_MAX;
                $city = 0;

                for ($i = 0; $i < COUNT($cities); $i++) {
                    echo "<tr>";
                    $sum = 0;
                    for ($j = 0; $j < COUNT($cities); $j++) {
                        $x1 = $cities[$i][0];
                        $x2 = $cities[$j][0];
                        $y1 = $cities[$i][1];
                        $y2 = $cities[$j][1];
                        $ans = sqrt( pow(($x1-$x2),2) + pow(($y1-$y2),2) );
                        //array_push($distance, $ans);
                        $sum += $ans;
                        //echo "<td>".$ans."</td>";
                        
                    }
                    if ($sum < $min) {
                        $min = $sum;
                        $city = $i+1;
                    }
                    
                    $cityNumber = $i+1;
                    echo "<td>City ".$cityNumber."</td>"; 
                    echo "<td>".$sum."</td>"; 
                    echo "</tr>";
                    if($cityNumber == COUNT($cities)) {
                        echo "The answer is city ".$city;
                    }

                }



            ?>
        </tbody>
    </table>
            
    </div>
    
</body>
</html>