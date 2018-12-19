<?php
	require_once('connection.php');
    require_once('include/insert_header.php');
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Worker Salary</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
					<div class="row">
						<div class="col-lg-12 field">
						<label>worker ID</label>
							<input class="formstyle" type="text" name="worker_id" placeholder="worker_id" data-rule="maxlen:4" data-msg="w_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						<label>salary</label>
							<input class="formstyle" type="text" name="salary" placeholder="salary" data-rule="maxlen:4" data-msg="salary" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>Commission</label>
							<input class="formstyle" type="text" name="commission" placeholder="commission" data-rule="maxlen:4" data-msg="commission" />
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
		$salary =    $_POST['salary'];
		$commission = $_POST['commission'];
		if(!empty($worker_id)){
			$insert="INSERT INTO  salary_w (worker_id,salary,commission )
			values('$worker_id','$salary','$commission')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
