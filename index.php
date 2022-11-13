<?php
include('dbConfig.php');

$fetch = "SELECT * FROM `users`";
$result = $conn->query($fetch);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Php Crude | Insert</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP Crud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="create.php">Insert</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">View</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <table class="table">
      <thead>
        <tr>

          <th scope="col">S.No</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>


        </tr>
      </thead>
      <tbody>
       
        <?php
          
                $fetch_record = $conn ->query("SELECT * FROM `users`");
                foreach($fetch_record as $row){
                ?>
            <tr>
              <td><?php echo $row['user_id'] ?></td>
              <td><?php echo $row['user_name'] ?></td>
              <td><?php echo $row['user_email'] ?></td>
              <td><?php echo $row['user_pwd'] ?></td>
              <td><?php echo $row['user_gender'] ?></td>
              <td>
                <a class="btn btn-info"  href="update.php?id=<?php echo $row['user_id'];  ?>">Edit</a>
                &nbsp;
                <a class="btn btn-danger"  href="delete.php?id=<?php echo $row['user_id']?>">Delete</a>
              </td>
            </tr>
        <?php

          }
       
        ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>