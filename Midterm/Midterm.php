<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .card {
            border: dotted #eee;
            border-color: black;
            margin: 5px;
            flex-direction: row;
        }
        .card img {
            width: 20%;
            margin: 10px;
        }
        .row:nth-of-type(odd) .card{
            background-color: lightblue;
            
        }
        .row:nth-of-type(even) .card{
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $students= array(
                array(
                    "Id" => 1001, 
                    "Name" => "Clarence", 
                    "Last_Name" => "Edmond",
                    "SSN" => "920644345",
                    "Phone" => "419-942-7436",
                    "Address" => "Wabash, OH",
                    "GPA" => "3.25",
                    "Image" => "https://roilenergy.com/img/icons/avatar.jpg"
                ),
                array(
                    "Id" => "1002", 
                    "Name" => "James", 
                    "Last_Name" => "Dill",
                    "SSN" => "861623976",
                    "Phone" => "203-339-0467",
                    "Address" => "Bridgeport, CT",
                    "GPA" => "3.13",
                    "Image" => "https://roilenergy.com/img/icons/avatar.jpg"
                ), 
                array(
                    "Id" => "1003", 
                    "Name" => "Ramon", 
                    "Last_Name" => "Murillo",
                    "SSN" => "419216128",
                    "Phone" => "425-498-9795",
                    "Address" => "Redmond, WA",
                    "GPA" => "3.56",
                    "Image" => "https://roilenergy.com/img/icons/avatar.jpg"
                ),
                array(
                    "Id" => "1004", 
                    "Name" => "Timothy", 
                    "Last_Name" => "Hunter",
                    "SSN" => "634307401",
                    "Phone" => "405-457-2456",
                    "Address" => "Lookeba, OK ",
                    "GPA" => "2.65",
                    "Image" => "https://roilenergy.com/img/icons/avatar.jpg"
                ),
                array(
                    "Id" => "1005", 
                    "Name" => "Kathleen", 
                    "Last_Name" => "Whitman",
                    "SSN" => "809321381",
                    "Phone" => "479-266-2517",
                    "Address" => "Farmington, AR",
                    "GPA" => "2.98",
                    "Image" => "https://roilenergy.com/img/icons/avatar.jpg"
                )
            );

            $GPA = array_column($students, 'GPA');
            array_multisort($GPA, SORT_DESC, $students);

            foreach($students as $s) {
                echo'<div class="row">';
                    echo'<div class="col">';
                        echo'<div class="card">';
                            echo '<img src="'.$s["Image"].'" class="img-fluid" alt="Responsive image"></img>.</br>';
                                echo '<div class= "card-body">';
                                    echo '<p class="card-text">'.    
                                        'First Name: '.$s["Name"].'</br>'.
                                        'Last Name: '.$s["Last_Name"].'</br>'.
                                        'Phone Number: '.$s["Phone"].'</br>'.
                                        'SSN: '.$s["SSN"].'</br>'.
                                        'Address: '.$s["Address"].'</br>'.
                                        'GPA: '.$s["GPA"].'</br>'.
                                    '</p>'.
                                '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';
            }    
            
        ?>

    </div>
</body>
</html>