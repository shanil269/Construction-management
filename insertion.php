<?php
include_once"connection.php";
   if(!empty($_POST)){
		$dept_name =   $_POST['dept_name'];
		if(!empty($dept_name)){
			$insert="INSERT INTO department (department_id,department_name)
			values('','$dept_name')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
