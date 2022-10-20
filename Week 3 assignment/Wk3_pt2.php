<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Wk3_pt2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
       
    <div class="container">
        <?php
            //1) Put all the data in an array (each element of the array is one row of data).
            $db = [
                "1006 Barry Riles 559619412",
                "1007 Cynthia Chance 456574136",
                "1008 Justin Booth 629199458",
                "1009 Darlene Ford 699943760",
                "1010 Kevin Haynes 837467249",
                "1011 Marjorie Broderick 696041024",
                "1012 Robert Greco 689191573",
                "1013 Lynn Cote 176484555",
                "1014 Diane Wasser 239881571",
                "1015 Fay Fay 772542172",
                "1016 Joseph Thomas 607032507",
                "1017 Molly Jones 560348529",
                "1018 Richard Martinez 703071905",
                "1019 Aaron Brown 421268302",
                "1020 Lisa Cook 840376444"
            ];
            $db2 =[];
            //print_r($db);

            //2) Then with a loop on this array, split each string into 4 parts: 
            //"ID", "fName", "lName" and "ssn" and store all the info in a new array.
            foreach ($db as $d) {
                array_push($db2, explode(" ", $d));
            }
            //print_r($db2);

            array_walk($db2, function(& $d){
                $d['Id'] = $d[0];
                unset($d[0]);
                $d['fName'] = $d[1];
                unset($d[1]);
                $d['lName'] = $d[2];
                unset($d[2]);
                $d['Ssn'] = $d[3];
                unset($d[3]);
            });
            //print_r($db2);

            //3) Then run a loop on this new array and create a table that with columns
            // "ID", "fName", "lName" and "ssn" and display the data in this table. The final output should be as follows.
            echo "<div class='row'>".
                    "<div class='col'>".
                        "<table class='table table-bordered'>".
                            "<thead class='bg-warning'>".
                                "<tr>".
                                    "<th scope='col'><u>id</u></th>".
                                    "<th scope='col'>Name</th>".
                                    "<th scope='col'>Last_name</th>".
                                    "<th scope='col'>Ssn</th>".
                            "</thead>".
                            "<tbody>";  
                                foreach ($db2 as $d) {
                                    echo "<tr>".
                                            "<td>".$d['Id']."</td>".
                                            "<td>".$d['fName']."</td>".
                                            "<td>".$d['lName']."</td>".
                                            "<td>".$d['Ssn']."</td>".
                                        "</tr>";
                                };
                        echo "</tbody>".
                        "</table>".
                    "</div>".
                    "</div>";
        ?>
    </div>
</body>
</html>


