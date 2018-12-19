<?php
	require_once('connection.php');
   
    
    
	
	if (!mysqli_connect_errno())
	{
		$cons = mysqli_query($con, "SELECT e.name,e.email,j.job_id,j.job_title FROM engineers_and_employees e natural join jobtype_e j ");
		mysqli_close($con);
		}
	?>
    <section id="list">
        <div class="container-fluid">
            <div class="container col-lg-6"> a>
                <h1>Employees </h1></a>
                <table class="info">
                    <thead>
                        <th>SL#</th>
                        <th>EMPLOYEE NAME</th>
                        <th>EMAIL</th>
                        <th>Job ID</th>
                        <th>Job Type</th>
                        
                    
                    </thead>
                    <tbody>
                        <?php
		$sl_no=1;
		foreach($cons as $member){
			?>
                            <tr class="table">
                                <td>
                                    <?php echo $sl_no;?>
                                </td>
                                <td>
                                    <?php echo $member['name'];?>
                                </td>
                                <td>
                                    <?php echo $member['email'];?>
                                </td>
                                <td>
                                    <?php echo $member['job_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['job_title'];?>
                                </td>
                                
                            </tr>
                            <?php
            
            $sl_no++;
            };
?>
            </div>
        </div>
    </section>
    