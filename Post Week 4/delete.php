<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
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

        if (isset($_GET['delete'])) {

            $result = $postId = "";

            if (empty($_GET['postId'])) {
                echo 'Post_Id is required<br>';
            } else {
                $postId = intval($_GET["postId"]);
                echo "Success: PostId ".$postId."<br>";
            }
            
            $sql = "DELETE FROM Post WHERE `Post`.`Post_ID` = $postId";

            if(mysqli_query($conn, $sql)) {
                echo "Data deleted";
            } else {
                echo "Data NOT deleted";
            }
        }
    ?>

</div>
</body>
</html>