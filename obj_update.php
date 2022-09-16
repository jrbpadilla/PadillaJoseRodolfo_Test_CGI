<?php
  $conn = new mysqli("localhost", "root", "", "cgi");
  // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Update Data
if (isset($_POST['btn-update-save'])) {
  // echo 'save';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $rt_date = $_POST['rt_date'];
  $c_date = $_POST['c_date'];

  $query = "UPDATE objective SET
            name='$name',
            description='$description',
            rt_date='$rt_date'
            c_date='$c_date'
            WHERE id = '$id'
            ";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    // echo 'success';
    header("Location: objectives.php");
  } else {
    echo 'failed';
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Crud</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

</head>

<body>

  <section>
    <div class="container">
      <div class="card">
        <header class="text-center text-white" style="background-color: #596275;">
          <h1>SIMPLE PHP CRUD </h1>
        </header>

        <div class="card-body">

          <div class="card">
            <div class="card-body">
              <div class="card-header text-white text-center mb-3" style="background-color:  #303952;">
                <h4>UPDATE CAREER OBJECTIVE</h4>
              </div>

              <?php
                $conn = new mysqli("localhost", "root", "", "cgi");
                if(isset($_POST['btn-update']))
                {
                  // echo $updateID;
                  $id = $_POST['id'];
                  $query = "SELECT * FROM objective WHERE id = '$id'";
                  $query_run = mysqli_query($conn,$query);

                  foreach($query_run as $row) :
                    // echo $row['id'];
                    ?>
                    <form action="" method="POST">

                      <input type="hidden" name="id" value="<?= $row['id']?>">

                      <div class="form-group mb-3">
                        <label for="" class="form-label">Name:</label>
                        <input type="text" name="name" value="<?= $row['name']?>" class="form-control inputField" id="name">
                      </div>

                      <div class="form-group mb-3">
                        <label for="" class="form-label">Description:</label>
                        <input type="text" name="description" value="<?= $row['description']?>" class="form-control inputField" id="description">
                      </div>

                      <div class="form-group mb-3">
                        <label for="" class="form-label">Reason Target Date:</label>
                        <input type="email" name="rt_date" value="<?= $row['rt_date']?>" class="form-control inputField" id="rt_date">
                      </div>

                      <div class="form-group mb-3">
                        <label for="" class="form-label">Completed Date:</label>
                        <input type="email" name="c_date" value="<?= $row['c_date']?>" class="form-control inputField" id="c_date">
                      </div>

                      <div class="float-end">
                        <button type="submit" name="btn-update-save" class="btn btn-sm btn-success">
                          <i class="fas fa-check"></i> Save
                        </button>

                        <a href="objectives.php">
                          <button type="button" class="btn btn-sm btn-info text-white">
                            <i class="fas fa-window-close"></i> Cancel
                          </button>
                        </a>
                      </div>
                    </form>
                    <?php
                  endforeach;
                }
              ?>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>

</html>