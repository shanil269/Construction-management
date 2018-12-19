<?php
	require_once('connection.php');
    require_once('include/material_header.php');
?>
<section id="content">
	<div class="container">
        
		<div class="row">
			<div class="col-lg-12">
                
				<h4>Employee info</h4>
				<form action="" id="contactform"  method="post" class="" name="send-contact">
                    
                    
               
                    
                    
					<div class="row">
						<div class="col-lg-12 field">
						<label>Material name</label>
							<input class="formstyle" type="text" name="material_name" placeholder="material_name" data-rule="maxlen:4" data-msg="Name" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						<label>TYPE ID</label>
							<input class="formstyle" type="text" name="type_id" placeholder="type_id" data-rule="maxlen:4" data-msg="type_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
						<label>job id</label>
							<input class="formstyle" type="text" name="amount" placeholder="amount" data-rule="maxlen:4" data-msg="amount" />
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
		$material_name=   $_POST['material_name'];
		$type_id=    $_POST['type_id'];
		$amount=$_POST['amount'];
		
		if(!empty($material_name)){
			$insert="INSERT INTO  materials (material_id,material_name,type_id,amount)
			values('','$material_name','$type_id','$amount')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
