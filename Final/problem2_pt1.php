Your PHP Code
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
                <th scope="col">Distance From City1</th>
                <th scope="col">Distance From City2</th>
                <th scope="col">Distance From City3</th>
                <th scope="col">Distance From City4</th>
                <th scope="col">Distance From City5</th>
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

                //print_r($cities);
                //print_r($city1);

                for ($i = 0; $i < COUNT($cities); $i++) {
                    echo "<tr>";

                    for ($j = 0; $j < COUNT($cities); $j++) {
                        $x1 = $cities[$i][0];
                        $x2 = $cities[$j][0];
                        $y1 = $cities[$i][1];
                        $y2 = $cities[$j][1];
                        $ans = sqrt( pow(($x1-$x2),2) + pow(($y1-$y2),2) );
                        array_push($distance, $ans);
                        echo "<td>".$ans."</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>
            
    </div>
    
</body>
</html>

