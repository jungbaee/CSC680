<?php include 'databaseAssignment4.php'; ?>

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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="Post_pg1.php">Home</a>
            <a class="navbar-brand" href="Post_pg2.php">Writing/Editing a Post</a>
            <a class="navbar-brand" href="Post_pg3.php">List of the posts</a>
        </nav>

        <div class="card border-secondary mb-3 bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <h6 class="card-text">
                    <button class="btn btn-dark">
                        <a href="Post_pg2.php">Write a New Post</a>
                    </button>
                </h6>
                
                    
                
            </div>
          </div>
        
        <hr>

        <div class="row">
            <div class="col">
                <?php
                    $sql = "SELECT Post_Title, Post_ID FROM Post";
                    $result = mysqli_query($conn, $sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo "<div class='row border border-dark'>".
                                    "<div class='col'>".
                                        $row['Post_Title'].
                                    "</div>".
                                    "<div class= 'row'>".
                                        "<div class='col text-right'>".
                                            "<div class= 'row'>".
                                                "<form action= edit.php method='get'>".
                                                    "<input type='hidden' name='postId' value=".$row['Post_ID'].">".
                                                    "<button class='btn btn-secondary' name='edit'>Edit</button>".
                                                "</form>".
                                                
                                                "<form action= delete.php method='get'>".
                                                    "<input type='hidden' name='postId' value=".$row['Post_ID'].">".
                                                    "<button class='btn btn-secondary' name='delete'>Delete</button>".
                                                "</form>".

                                                "<form action= view.php method='get'>".
                                                    "<input type='hidden' name='postId' value=".$row['Post_ID'].">".
                                                    "<button class='btn btn-secondary' name='view'>View</button>".
                                                "</form>".
                                            "</div>".
                                        "</div>".
                                    "</div>".
                                "</div>";
                        }
                    } else {
                        echo "<div class='row-12'>".
                                "<div class='border border-dark'>".
                                    "N/A".
                                "</div>".
                            "</div>";
                    }
                    $conn->close();
                ?>
            </div>
        </div>

    </div>
    
</body>
</html>