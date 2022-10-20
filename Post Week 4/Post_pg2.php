<?php include 'databaseAssignment4.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title> Writing/Editing a Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="Post_pg1.php">Home</a>
            <a class="navbar-brand" href="Post_pg2.php">Writing/Editing a Post</a>
            <a class="navbar-brand" href="Post_pg3.php">List of the posts</a>
        </nav>


        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
            <div class="form-group">
                <span class="label label-default">Post Title</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="postTitle"></input>
            </div>
            <div class="form-group">
                <span class="label label-default">Post Body</span>
            </div>
            <div class="form-group w-auto">
                <textarea class="form-control" rows="5" name ="postBody"></textarea>
            </div>
            <div class="form-group">
                <div class="col">
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary float-right">Publish</button>
                    </div>
                </div>    
            </div>
        </form>

        <?php 
            $postTitle = $postBody = $sql = "";

            if (isset($_GET['postTitle']) && isset($_GET['postBody'])) {

                if (empty($_GET['postTitle'])) {
                    echo 'Post Title is required<br>';
                } else {
                    $postTitle = $_GET["postTitle"];
                    echo "Success: postTitle ".$postTitle."<br>";
                }

                if (empty($_GET['postBody'])) {
                    echo 'Post Body is required<br>';
                } else {
                    $postBody = $_GET["postBody"];
                    echo "Success: PostBody ".$postBody."<br>";
                }

                if (!empty($_GET['postTitle']) && !empty($_GET['postBody'])) {
                    $sql = "INSERT INTO Post(Post_Title, Post_Body) VALUES ('$postTitle', '$postBody')";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        ?>

    </div>
</body>
</html>