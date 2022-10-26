<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'CSC680User');
    define("DB_PASS", '123456');
    define("DB_NAME", 'pet_adoption');

    //create connection using the predefined variables above
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    //$conn = new mysqli('localhost', 'CSC680User', '123456', 'CSC 680 Project');
    //checking connection
    if ($conn ->connect_error){
        die('Connection Failed'.$conn->connect_error);
    }

    echo 'Connection succeeded!';
?>

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
                <th scope="col">pet_name</th>
                <th scope="col">Pet_type</th>
                <th scope="col">Pet_breed</th>
                <th scope="col">Arrival_date</th>
                <th scope="col">Owner_full_name</th>
                <th scope="col">Adoption_date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tbody>
    </table>
        

    </div>
    
</body>
</html>