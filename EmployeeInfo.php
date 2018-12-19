<?php
	require_once('connection.php');
    require_once('include/insert_header.php');
?>
<section id="content">
	<div class="container">
        
		<div class="row">
			<div class="col-lg-12">
                
				<h4>Employee info</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
                    
                    
               
                    
                    
					<div class="row">
						<div class="col-lg-12 field">
						<label>Employee name</label>
							<input class="formstyle" type="text" name="name" placeholder="name" data-rule="maxlen:4" data-msg="Name" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						<label>department ID</label>
							<input class="formstyle" type="text" name="department_id" placeholder="department_id" data-rule="maxlen:4" data-msg="department_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>job id</label>
							<input class="formstyle" type="text" name="job_id" placeholder="job_id" data-rule="maxlen:4" data-msg="" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>workshift id</label>
							<input class="formstyle" type="text" name="workshift_id" placeholder="workshift_id" data-rule="maxlen:4" data-msg="" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>Address</label>
							<input class="formstyle" type="text" name="address" placeholder="address" data-rule="maxlen:4" data-msg="address" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12  field">
                        <label>phone_number</label>
							<input class="formstyle" type="text" name="phone_number" placeholder="phone_number" data-rule="maxlen:4" data-msg="phone_number" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
                        <label>email</label>
							<input class="formstyle" type="text" name="email" placeholder="email" data-rule="maxlen:4" data-msg="email" />
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


<?php
include_once"connection.php";
   if(!empty($_POST)){
		$name=   $_POST['name'];
		$department_id=    $_POST['department_id'];
		$job_id=$_POST['job_id'];
		$workshift_id=$_POST['workshift_id'];
        $address=  $_POST['address'];
        $phone_number=  $_POST['phone_number'];
        $email=  $_POST['email'];
		if(!empty($name)){
			$insert="INSERT INTO  engineers_and_employees (e_id,name,department_id,job_id,workshift_id,address,phone_number,email )
			values('','$name','$department_id','$job_id','$workshift_id','$address','$phone_number','$email')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
