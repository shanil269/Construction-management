<?php
	require_once('connection.php');
   
    require_once"include/print_header.php";
    
	
	if (!mysqli_connect_errno())
	{
		$cons = mysqli_query($con, "SELECT * FROM jobtype_e ");
		mysqli_close($con);
		}
	?>
    <section id="list">
        <div class="container-fluid">
            <div class="container col-lg-6">
                <link rel="stylesheet" href="style.css" type="text/css" />
                <h3>Engineers and Employees JOB TYPE </h3></a>
                <table class="info">
                    <table width="80%" border="1">
                    <thead>
                        <th>SL#</th>
                        <th>  JOB ID  </th>
                        <th>  JOB TITLE  </th>
                        <th>  MAX SALARY </th>
                        <th>  MIN SALARY  </th>
                        
                        
                        
                    
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
                                    <?php echo $member['job_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['job_title'];?>
                                </td>
                                <td>
                                    <?php echo $member['max_salary'];?>
                                </td>
                                <td>
                                    <?php echo $member['min_salary'];?>
                                </td>
                                
                                
                            </tr>
                            <?php
            
            $sl_no++;
            };
?>
            </div>
        </div>
    </section>
    