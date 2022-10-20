<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>VIEW</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="Post_pg1.php">Home</a>
            <a class="navbar-brand" href="Post_pg2.php">Writing/Editing a Post</a>
            <a class="navbar-brand" href="Post_pg3.php">List of the posts</a>
        </nav>


    <?php include 'databaseAssignment4.php'; 

        if (isset($_GET['view'])) {

            $result = $postId = "";

            if (empty($_GET['postId'])) {
                echo 'Post_Id is required<br>';
            } else {
                $postId = intval($_GET["postId"]);
                //echo "Success: PostId ".$postId."<br><br><br>";
            }
            
            $sql = "SELECT * FROM Post WHERE `Post`.`Post_ID` = $postId";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)) {
                echo "<div class='row-12'>".
                        "<div class='border border-dark'>".
                            $row['Post_Title'].
                        "</div>".
                    "</div>".
                    "<div class='row-12 my-2'>".
                        "<div class='border border-dark'>".
                            $row['Post_Body'].
                        "</div>".
                    "</div>";
            }
        }
    ?>
</div>
</body>
</html>