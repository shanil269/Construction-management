<?php
	require_once('connection.php');
    require_once('include/insert_header.php');
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Worker Attendance</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
					<div class="row">
						<div class="col-lg-12 field">
						<label>Employee ID</label>
							<input class="formstyle" type="text" name="worker_id" placeholder="worker_id" data-rule="maxlen:4" data-msg="w_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						<label>datev</label>
							<input class="formstyle" type="text" name="date" placeholder="date" data-rule="maxlen:4" data-msg="date" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>attendance</label>
							<input class="formstyle" type="text" name="attendance" placeholder="1 or 0" data-rule="maxlen:4" data-msg="attendance" />
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
		$worker_id =   $_POST['worker_id'];
		$date =    $_POST['date'];
		$attendance = $_POST['attendance'];
		if(!empty($worker_id)){
			$insert="INSERT INTO  attendance_w (worker_id,date,attendance )
			values('$worker_id','$date','$attendance')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
