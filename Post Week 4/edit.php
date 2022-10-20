<?php include 'databaseAssignment4.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
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

    <?php

        if (isset($_GET['edit'])) {

            $result = $postId = "";

            if (empty($_GET['postId'])) {
                echo 'Post_Id is required... 1st block<br>';
            } else {
                $postId = intval($_GET["postId"]);
                //echo "Success: PostId ".$postId."<br><br><br>";
            }

            $sql = "SELECT * FROM `Post` WHERE `Post`.`Post_ID` = $postId";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)) {
                echo '<form action='.htmlspecialchars($_SERVER['PHP_SELF']).' method="get">'.
                            '<div class="form-group">'.
                                '<span class="label label-default">Post Title</span>'.
                            '</div>'.

                            '<div class="form-group">'.
                                '<textarea type="text" class="form-control" name="postTitle">'.$row['Post_Title'].'</textarea>'.
                            '</div>'.

                            '<div class="form-group">'.
                                '<span class="label label-default">Post Body</span>'.
                            '</div>'.

                        '<div class="form-group w-auto">'.
                            '<textarea class="form-control" rows="5" name ="postBody">'.$row['Post_Body'].'</textarea>'.
                        '</div>'.

                        '<div class="form-group">'.
                            '<div class="col">'.
                                '<div class="text-end">'.
                                    "<input type='hidden' name='postId' value=".$row['Post_ID'].">".
                                    '<button type="submit" class="btn btn-secondary float-right" name="update">Update</button>'.
                                '</div>'.
                            '</div>'.   
                        '</div>'.
                '</form>';                
            }
        }
    ?>

    <?php

        if (isset($_GET['postId'])) {
            
            $result = $postTitle = $postBody = $postId = "";

            if (empty($_GET['postId'])) {
                echo 'Post_Id is required 2nd block<br>';
            } else {
                $postId = intval($_GET["postId"]);
                echo "Success: PostId ".$postId."<br>";
            }

            if (empty($_GET['postTitle'])) {
                echo 'Post Title is required<br>';
            } else {
                $postTitle = $_GET["postTitle"];
                echo "Success: postTitle: ".$postTitle."<br>";
            }

            if (empty($_GET['postBody'])) {
                echo 'Post Body is required<br>';
            } else {
                $postBody = $_GET["postBody"];
                echo "Success: postBody: ".$postBody."<br>";
            }

            $sqlUpdate = "UPDATE Post SET Post_Title ='". $postTitle."', Post_Body = '".$postBody."' WHERE Post.Post_ID = '".$postId."'";
            //UPDATE `Post` SET `Post_Title` = 'Post Two Title 3', `Post_Body` = 'Example 2 3' WHERE `Post`.`Post_ID` = 14

            if (mysqli_query($conn, $sqlUpdate)) {
                echo "Data edited";
            } else {
                echo "Data NOT edited";
            }
        }
    ?>


</div>
</body>
</html>