<?php
  $conn = new mysqli("localhost", "root", "", "cgi");
  // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create Data
if(isset($_POST['btn-save']))
{
  // echo "save";
  $name = $_POST['name'];
  $description = $_POST['description'];
  $rt_date = $_POST['rt_date'];
  $c_date = $_POST['c_date'];

  $query = "INSERT INTO objective (name, description, rt_date, c_date) 
            VALUES('$name', '$description', '$rt_date', '$c_date');";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    // echo 'success';
    header("Location: objectives.php");
  } else {
    echo 'failed';
  }
}

// Update Data
if (isset($_POST['btn-update-save'])) {
  // echo 'save';
  $update_id = $_POST['update_id'];
  $update_name = $_POST['update_name'];
  $update_description = $_POST['update_description'];
  $update_rt_date = $_POST['update_rt_date'];
  $update_c_date = $_POST['update_c_date'];

  $query = "UPDATE objective SET
            name='$update_name',
            description='$update_description',
            rt_date='$update_rt_date',
            c_date='$update_c_date'
            WHERE id = '$update_id'
            ";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    // echo 'success';
    header("Location: objectives.php");
  } else {
    echo 'failed';
  }
}

// Delete Data
if(isset($_POST['btn-delete-info']))
{
  // echo "save";
  $deleteID = $_POST['deleteID'];
  

  $query = "DELETE FROM objective WHERE id = '$deleteID'";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    header("Location: objectives.php");
  } else {
    echo 'failed';
  }
}



?>
<!DOCTYPE html>
<html>
<title>Career Objectives</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; background-color: #3FA8D5;" id="mySidebar" >
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="homepage.php" class="w3-bar-item w3-button">Homepage</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div id="main">

<div class="w3-blue">
  <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776; Career Objectives</button>

</div>



<div class="w3-container">
 <style>
* {
  box-sizing: border-box;
}

body {
  background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height:950px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Crud</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>


    <div class="row">
    <div class="container">
      <div class="card">

        <div class="card-body">
          <div class="row">
            
            <!-- REGISTER EMPLOYEE -->
            <div class="col-md-4 col-sm-12">
              <div class="card">
                <div class="card-header text-white text-center" style="background-color: #3FA8D5;">
                  <h4>ADD CAREER OBJECTIVE</h4>
                </div>
                <div class="card-body">
                  <form id="add-form" action="" method="POST">
                    <div class="form-group mb-3">
                      <label for="" class="form-label">Name:</label>
                      <input type="text" name="name" class="form-control inputField" id="name">
                    </div>

                    <div class="form-group mb-3">
                      <label for="" class="form-label">Description:</label>
                      <input type="text" name="description" class="form-control inputField" id="description">
                    </div>

                    <div class="form-group mb-3">
                      <label for="" class="form-label">Reason Target Date:</label>
                      <input type="date" name="rt_date" class="form-control inputField" id="rt_date">
                    </div>

                    <div class="form-group mb-3">
                      <label for="" class="form-label">Completed Date:</label>
                      <input type="date" name="c_date" class="form-control inputField" id="c_date">
                    </div>

                    <div class="float-end">
                      <button type="submit" name="btn-save" class="btn btn-sm btn-success">
                        <i class="fas fa-check"></i> Save
                      </button>

                      <button class="btn btn-sm btn-danger" onclick="document.getElementById('add-form').reset()">
                      <i class="fas fa-times"></i> Clear
                      </button>
                    </div>
                  </form>
                </div>
              </div>

            </div>

            
            <!-- INFORMATION TABLE -->
            <div class="col-md-8 col-sm-12">
              <div class="card">
                <div class="card-header text-white text-center" style="background-color: #3FA8D5;">
                  <h4>INFORMATION TABLE</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="max-height: 289px">
                    <table class="table table-bordered ">
                      <thead class="table-active">
                        <tr class="text-uppercase text-center">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Reason Target Date</th>
                          <th>Completed Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody >
                        <?php
                          $conn = new mysqli("localhost", "root", "", "cgi");

                          $query = "SELECT * FROM objective";
                          $query_run = mysqli_query($conn, $query);

                          if(mysqli_fetch_array($query_run) > 0)
                          {
                            foreach($query_run as $row) :
                              // echo $row['info_fname'];
                            ?>
                            <tr class="text-center overflow-auto">
                              <td><?= $row['id']?></td>
                              <td><?= $row['name']?></td>
                              <td><?= $row['description']?></td>
                              <td><?= $row['rt_date']?></td>
                              <td><?= $row['c_date']?></td>
                              <td>
                                  <button 
                                    type="submit"
                                    name="btn-update"
                                    class="btn btn-sm btn-info text-dark"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalUpdate<?php echo $row['id']?>">
                                  <i class="fas fa-pencil-alt"></i>
                                  </button> 
                              </td>
                              <td>
                                  <button
                                    type="submit" 
                                    name="btn-delete"
                                    class="btn btn-sm btn-danger text-white" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalDelete<?php echo $row['id']?>">
                                    <i class="fas fa-trash"></i>
                                  </button>

                                
                              </td>
                            </tr>
                            <?php
                            endforeach;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  $conn = new mysqli("localhost","root","","cgi");
  $result = mysqli_query($conn, 'Select * from objective');
  while ($data = mysqli_fetch_array($result))
  {
    ?>


  <!-- Modal Update -->
  <div class="modal fade" id="modalUpdate<?php echo $data['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3FA8D5">
          <h5 class="modal-title text-white text-uppercase" id="staticBackdropLabel">Career Objective Update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="objectives.php" method="POST">
          <input type="hidden" name="update_id" value="<?= $row['id']?>">

          <div class="form-group mb-3">
            <label for="" class="form-label">Name:</label>
            <input type="text" name="update_name" value="<?= $row['name']?>" class="form-control inputField" id="name">
          </div>

          <div class="form-group mb-3">
            <label for="" class="form-label">Description:</label>
            <input type="text" name="update_description" value="<?= $row['description']?>" class="form-control inputField" id="description">
          </div>

          <div class="form-group mb-3">
            <label for="" class="form-label">Reason Target Date:</label>
            <input type="date" name="update_rt_date" value="<?= $row['rt_date']?>" class="form-control inputField" id="rt_date">
          </div>

          <div class="form-group mb-3">
            <label for="" class="form-label">Completed Date:</label>
            <input type="date" name="update_c_date" value="<?= $row['c_date']?>" class="form-control inputField" id="c_date">
          </div>


        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-info text-dark" data-bs-dismiss="modal">
              <i class="fas fa-times"></i> Cancel
              </button>
              <button type="submit"  name="btn-update-save" class="btn btn-sm btn-success"> 
                <i class="fas fa-check"></i> Save
              </button>
            </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Modal Update -->
      <div class="modal fade" id="modalDelete<?php echo $data['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #303952">
              <h5 class="modal-title text-white text-uppercase" id="staticBackdropLabel">Modal Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
              <p class="h3">Are you sure?</p>
              
            </div>
            <div class="modal-footer">
              <form action="objectives.php" method="post">
                <input type="hidden" name="deleteID" value="<?php echo $data['id']?>">
                <button type="button" class="btn btn-sm btn-info text-dark" data-bs-dismiss="modal">
                  <i class="fas fa-times"></i> Cancel
                </button>

                <button type="submit" name="btn-delete-info" class="btn btn-sm btn-danger"> 
                  <i class="fas fa-trash"></i> Delete
                </button>
              </form>
            
            </div>
          </div>
        </div>
      </div>
    <?php
  }
?>
  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>