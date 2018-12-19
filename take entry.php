<?php
	require_once('connection.php');
    include_once"include/insert_header.php";
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Deparment Details</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
					<div class="row">
						<div class="col-lg-12 field">
						<label>Department Name</label>
							<input class="formstyle" type="text" name="dept_name" placeholder="DEP NAME" data-rule="maxlen:4" data-msg="Name" />
							<div class="validation">
							</div>
						</div>
						
						
						
						<div class="col-lg-12  field">
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

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
