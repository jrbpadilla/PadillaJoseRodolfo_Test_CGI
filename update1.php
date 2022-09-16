<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<?php
			$zz = $_POST['id'];
			$name = $_POST['name'];
		    $description = $_POST['description'];
			$rt_date = $_POST['rt_date'];
			$c_date = $_POST['c_date'];
			
	   include('connect.php');
		
	 			$query = 'UPDATE objective set name ="'.$name.'",
					description ="'.$description.'", rt_date="'.$rt_date.'",
					c_date="'.$c_date.'" WHERE
					id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successful.");
			window.location = "objectives.php";
		</script>
 </body>
</html>