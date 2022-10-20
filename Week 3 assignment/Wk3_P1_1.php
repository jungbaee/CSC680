<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Wk3_P1_1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
        <?php
            
            function calculateUnion($arr1, $arr2) {    
                $arr1_len = count($arr1);
                $arr2_len = count($arr2);
                $i = 0;
                $j = 0;
                $arr3 = array();

                while ($i < $arr1_len && $j < $arr2_len) {
                    if ($arr1[$i] < $arr2[$j]) {
                        array_push($arr3, $arr1[$i++]);
                    } else if ($arr1[$i] === $arr2[$j]) {
                        array_push($arr3, $arr1[$i++]);
                        $j++;
                    } else {
                        array_push($arr3, $arr2[$j++]);
                    }
                }

                while ($i < $arr1_len) {
                    array_push($arr3, $arr1[$i++]);
                }

                while ($j < $arr2_len) {
                    array_push($arr3, $arr2[$j++]);
                }

                foreach ($arr3 as $a3) {
                    echo "<tr><td>".$a3."</td></tr>";
                }
            }

            $array1 = array(5,10,18,20,1234,1560,2000,2002,10000,58942);
            $array2 = array(1,2,3,5,7,10,20,30000,80000);
            echo "<div class='row'>".
                    "<div class='col'>".
                        "<table class='table'>".
                            "<thead>".
                                "<tr>".
                                    "<th scope='col'>Array1</th>".
                            "</thead>".
                            "<tbody>";  
                                foreach ($array1 as $a1) {
                                    echo "<tr><td>".$a1."</td></tr>";
                                };
                        echo "</tbody>".
                        "</table>".
                    "</div>".
                    
                    "<div class='col'>".
                        "<table class='table'>".
                            "<thead>".
                                "<tr>".
                                    "<th scope='col'>Array2</th>".
                            "</thead>".
                            "<tbody>";  
                                foreach ($array2 as $a2) {
                                    echo "<tr><td>".$a2."</td></tr>";
                                };
                        echo "</tbody>".
                        "</table>".
                    "</div>".
                    
                    "<div class='col'>".
                        "<table class='table'>".
                            "<thead>".
                                "<tr>".
                                    "<th scope='col'>Array3</th>".
                            "</thead>".
                            "<tbody>";  
                                calculateUnion($array1, $array2);
                        echo "</tbody>".
                        "</table>".
                    "</div>".
                    
                
                "</div>";
            
            
        ?>
    </div>
</body>
</html>


