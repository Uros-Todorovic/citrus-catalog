<?php
require_once("includes/class_loader.php");
$database = Database::get_connection();

$products = Product::find_all_products();

if (isset($_POST['submit'])) {
    $comment = Comment::submit_comment();
} else {
    $name = "";
    $email = "";
    $text = "";
}

$comments = Comment::find_all_comments();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citrus Catalog</title>
    <link rel="stylesheet" href="custom_css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center py-4">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="index.php"><h3>Citrus Catalog</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/index.php" target="_blank"><h4>Admin</h4></a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        <div class="row">
            
            <?php
                foreach ($products as $product) {
            ?>
                <div class="col-md-4">
                    <h3><?php echo $product->title?></h3>
                    <img src="img/<?php echo $product->picture?>" alt="" class="img-fluid">
                    <p><?php echo $product->description?></p>
                </div>
            <?php
                }
            ?>
           
        </div>

        <div class="row">
            <div class="col-sm">
                <h4 class="mb-4">Comments</h4>
                <hr>
                <?php
                    foreach ($comments as $comment) {
                        if ($comment->aprooved == 1) {
                    ?>
                        <p>Name: <?php echo $comment->name; ?></p>
                        <p>Email: <?php echo $comment->email; ?></p>
                        <p>Comment: <?php echo $comment->text; ?></p>
                        <br>
                    <?php
                        }
                    }
                ?>
            </div>
            
        </div>
        <hr>
        <div class="row">
            <div class="col-sm mt-4">
                <h4>Leave a Comment:</h4>
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="name">Author</label>
                            <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="text">Comment</label>
                            <textarea name="text" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <footer class="mt-5">
            <div>
                <p class="text-center">Created by &copy; Uros Todorovic / 06.11.2019</p>
            </div>
        </footer>
    </div>


    
</body>
</html>