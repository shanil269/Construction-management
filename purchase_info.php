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
						<label>Material ID</label>
							<input class="formstyle" type="text" name="material_id" placeholder="material_id" data-rule="maxlen:4" data-msg="material_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field"><!--new-->
						<label>Purchase Date</label>
							<input class="formstyle" type="text" name="purchase_date" placeholder="purchase_date" data-rule="maxlen:4" data-msg="purchase_date" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
                            <label>Supplier ID</label>
							<input class="formstyle" type="text" name="supplier_id" placeholder="supplier_id" data-rule="maxlen:4" data-msg="supplier_id" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field">
                            
						<label>Amount</label>
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
		$material_id=   $_POST['material_id'];
		$purchase_date=    $_POST['purchase_date'];
        $supplier_id=    $_POST['supplier_id'];
		$amount=$_POST['amount'];
		
		if(!empty($material_name)){
			$insert="INSERT INTO  purchase_info (material_id,purchase_date,supplier_id,amount)
			values('$material_id','$material_name','$supplier_id','$amount')";
			if(mysqli_query($con,$insert)){
				
				echo "New record created successfully";
			}else{
				echo "Failed your Message";
			}
		}
	}
?>
