<!DOCTYPE html>
<html>
<title>Objectives</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; background-color: #3FA8D5;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="homepage.php" class="w3-bar-item w3-button">Homepage</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div id="main">

<div class="w3-blue">
  <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776; Objectives</button>

</div>



<div class="w3-container">
<style>

  body {
  background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
table {
  border-collapse: collapse;
  width: 100%;
}

tr {
  border-bottom: 1px solid #ddd;
}

.open-button {
  background-color: #38d39f;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:5px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="row">
  <br><br>

<table class="table table-hover" style="text-align: center;">
<thead>
    <tr style="color:white; background-color:#11a5f5;">
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Reason Target Date</th>
        <th>Completed Date</th>
        <th> Action </th>
    </tr>
</thead>

<tbody>
<?php

include("connect.php");

$retrieve_query = mysqli_query($db,"SELECT * FROM objective");

while ($objective = mysqli_fetch_assoc($retrieve_query)){
  
    $db_id = $objective["id"];
    $db_name = $objective["name"];
    $db_description = $objective["description"];
    $db_rt_date = $objective["rt_date"];
    $db_c_date = $objective["c_date"];
  
  $jScript = md5(rand(1,9));  
  $newScript = md5(rand(1,9));  
  $getEUpdate = md5(rand(1,9));
  $getDelete = md5(rand(1,9));
  
  echo "
  
  <tr>
    
    <td>$db_id</td>
    <td>$db_name</td>
    <td>$db_description</td>
    <td>$db_rt_date</td>
    <td>$db_c_date</td>
    
    <td> 
      <a class='btn btn-outline-primary' href='update.php?jScript=$jScript&&newScript=$newScript&&getEUpdate=$getEUpdate&&id' > UPDATE </a> 
      
      <br><br>
    
      <a href='?jScript=$jScript && newScript=$newScript && getDelete=$getDelete && id' class='btn btn-outline-danger'>DELETE</a>
    </td>
  </tr>
  
  ";

}

?>

</tbody>


</table>

</div>


<button class="open-button" onclick="openForm()">Add Career Objective</button>

<div class="form-popup" id="myForm">

  <form action="objectives.php" class="form-container" method="post">
    <h4>Add New Career Objective</h4>

    <label for="objective"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="objective"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="description" required>

    <label for="objective"><b>Reason Target Date</b></label>
    <input type="date" placeholder="Enter Reason Target Date" name="rt_date" required>
<br><br>
    <label for="objective"><b>Completed Date</b></label>
    <input type="date" placeholder="Enter Completed Date" name="c_date" required>
<br><br>
    <button type="submit" name="register" id="register" class="btn">Add Career Objective</button>

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</div>

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
