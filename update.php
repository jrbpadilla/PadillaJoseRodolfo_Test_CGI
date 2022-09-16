      <?php
        $query = 'SELECT id, name, description ,rt_date, c_date from objective
              WHERE
              id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['id'];
                $i= $row['name'];
                $a=$row['description'];
                $b=$row['rt_date'];
                $c=$row['c_date'];
             
              }
              
              $id = $_GET['id'];
         
      ?>

                  <h2>Edit Records</h2>

                        <form role="form" method="post" action="update1.php" >
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter your Name" name="firstname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter your Description" name="lastname" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter your Reason Target Date" name="user" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Enter your Completed Date" name="mail" value="<?php echo $c; ?>">
                            </div> 
                            <button type="submit" class="btn btn-default">Update Career Objective</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>