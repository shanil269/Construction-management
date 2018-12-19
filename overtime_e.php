<?php
	require_once('connection.php');
    require_once('include/insert_header.php');
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Employee Overtime</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
					<div class="row">
						<div class="col-lg-12 field">
						<label>Employee ID</label>
							<input class="formstyle" type="text" name="e_id" placeholder="e_id" data-rule="maxlen:4" data-msg="e_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
                           <label>Overtime Hour</label>
							<input class="formstyle" type="text" name="overtime_hour" placeholder="overtime_hour" data-rule="maxlen:4" data-msg="overtime_hour" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						
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
		$e_id =   $_POST['e_id'];
       // $date =$_POST['date'];
		$overtime_hour = $_POST['overtime_hour'];
		if(!empty($e_id)){
			$insert="INSERT INTO  overtime_e (e_id,overtime_hour )
			values('$e_id','$overtime_hour')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
