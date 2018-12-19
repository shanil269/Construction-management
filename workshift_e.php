<?php
	require_once('connection.php');
    require_once('include/insert_header.php');
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Insert Workshift</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
					<div class="row">
						<div class="col-lg-12 field">
						<label>Timing</label>
							<input class="formstyle" type="text" name="timing" placeholder="timing" data-rule="maxlen:4" data-msg="timing" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						
						
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
		$timing =   $_POST['timing'];
		
		if(!empty($timing)){
			$insert="INSERT INTO  workshift_e (workshift_id,timing )
			values('','$timing')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
