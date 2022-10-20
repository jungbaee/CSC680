<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Week 2 Assignment - Part 2-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <table class="table table-striped">
        <thead>    
            <tr>
                <th scope="col">Post_Id</th>
                <th scope="col">Post_Title</th>
                <th scope="col">Post_Body</th>
            </tr>
        </thead>    
    
        <tbody>
            <?php
                $post = array(
                            array(
                                "Post_Id" => 1, 
                                "Post_Title" => "Title 1", 
                                "Post_Body" => "Body 1"
                            ),
                            array(
                                "Post_Id" => 2, 
                                "Post_Title" => "Title 2", 
                                "Post_Body" => "Body 2"
                            ),
                            array(
                                "Post_Id" => 3, 
                                "Post_Title" => "Title 3", 
                                "Post_Body" => "Body 3"
                            ),
                            array(
                                "Post_Id" => 4, 
                                "Post_Title" => "Title 4", 
                                "Post_Body" => "Body 4"
                            ),
                    );

                    foreach($post as $p) {
                        echo "<tr>";
                            echo "<td>".$p["Post_Id"]."</td>"."<td>".$p["Post_Title"]."</td>"."<td>".$p["Post_Body"]."</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>