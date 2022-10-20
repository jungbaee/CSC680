<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Week 2 Assignment - Part 2-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <table class="table table-striped">
        <thead>    
            <tr>
                <th scope="col">Video_Id</th>
                <th scope="col">Video_Title</th>
                <th scope="col">Video_Description</th>
                <th scope="col">Video_Link</th>
            </tr>
        </thead>    
    
        <tbody>
            <?php
                $video = array(
                            array(
                                "Video_Id" => 1, 
                                "Video_Title" => "Title 1", 
                                "Video_Description" => "Description 1",
                                "Video_Link" => "Link_1.mp4"
                            ),
                            array(
                                "Video_Id" => 2, 
                                "Video_Title" => "Title 2", 
                                "Video_Description" => "Description 2",
                                "Video_Link" => "Link_2.mp4"
                            ),
                            array(
                                "Video_Id" => 3, 
                                "Video_Title" => "Title 3", 
                                "Video_Description" => "Description 3",
                                "Video_Link" => "Link_3.mp4"
                            ),
                            array(
                                "Video_Id" => 4, 
                                "Video_Title" => "Title 4", 
                                "Video_Description" => "Description 4",
                                "Video_Link" => "Link_4.mp4"
                            )
                           
                    );

                    foreach($video as $v) {
                        echo "<tr>";
                            echo "<td>".$v["Video_Id"]."</td>"."<td>".$v["Video_Title"]."</td>".
                            "<td>".$v["Video_Description"]."</td>"."<td>".$v["Video_Link"]."</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>

</body>
</html>