<?php

require_once('includes/header.php');

?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Citrus Catalog Admin </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Comments</a>
        <a href="../index.php" class="list-group-item list-group-item-action bg-light">Home</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Comments</h1>
        <div class="row">
          <div class="col-md">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Comment Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Text</th>
                  <th>Aprooved</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($comments as $comment) : ?>
                  <tr>
                    <td><?php echo $comment->id ?></td>
                    <td><?php echo $comment->name ?>
                      <div class="action_links">
                        <a href="aproove_comment.php?id=<?php echo $comment->id; ?>" class="btn btn-danger btn-sm">Approve</a>
                      </div>
                    </td>
                    <td><?php echo $comment->email ?></td>
                    <td><?php echo $comment->text ?></td>
                    <td>
                      <?php 
                        if ($comment->aprooved == 1) {
                          echo "Yes";
                        }
                      ?>
                    </td>
                    </tr>
                                
                <?php endforeach ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
