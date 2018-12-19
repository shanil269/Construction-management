<?php
	require_once('connection.php');
    require_once('include/insert_header.php');
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Worker JOBType info</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
					<div class="row">
						<div class="col-lg-12 field">
						<label>Job ID</label>
							<input class="formstyle" type="text" name="job_id" placeholder="job_id" data-rule="maxlen:4" data-msg="job_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						<label>job_title</label>
							<input class="formstyle" type="text" name="job_title" placeholder="job_title" data-rule="maxlen:4" data-msg="job_title" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>max_salary</label>
							<input class="formstyle" type="text" name="max_salary" placeholder="max_salary" data-rule="maxlen:4" data-msg="max_salary" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>min_salary</label>
							<input class="formstyle" type="text" name="min_salary" placeholder="min_salary" data-rule="maxlen:4" data-msg="min_salary" />
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
		$job_id =   $_POST['job_id'];
        $job_title =   $_POST['job_title'];
		$max_salary =    $_POST['max_salary'];
		$min_salary = $_POST['min_salary'];
		if(!empty($job_id)){
			$insert="INSERT INTO  jobtype_w (job_id,job_title,max_salary,min_salary )
			values('$job_id','$job_title','$max_salary','$min_salary')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
