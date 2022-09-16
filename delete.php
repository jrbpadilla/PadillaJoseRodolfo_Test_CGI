<?php
include('connect.php');
?>

<body>
<?php

      if (!isset($_GET['do']) || $_GET['do'] != 1) {
                
  
      switch ($_GET['type']) {
        case 'objective':
          $query = 'DELETE FROM objective
              WHERE
              id = ' . $_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
            
?>
      <script type="text/javascript">
        alert("Successfully Deleted.");
        window.location = "objectives.php";
      </script>       
        
      <?php
      //break;
        }
      }
      ?>

</body>
</html>