<?php
	require_once('connection.php');
    require_once"include/print_header.php";
    
    
	
	if (!mysqli_connect_errno())
	{
		$cons = mysqli_query($con, "SELECT * FROM workers ");
		mysqli_close($con);
		}
	?>
    <section id="list">
        <div class="container-fluid">
            <div class="container col-lg-6">
                <h1>WORKERS LISTS </h1></a>
                <table class="info">
                    <table width="80%" border="1">
                    <thead>
                        <th>SL#</th>
                        <th>WORKERS ID</th>
                        <th>WORKERS NAME</th>
                        <th>DEPARTMENT ID</th>
                        <th>Job ID</th>
                        <th>WORKSHIFT_ID</th>
                        <th>ADDRESS</th>
                        <th>PHONE NUMBER</th>
                        <th>EMPLOYER ID</th>
                        
                    
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
                                    <?php echo $member['worker_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['worker_name'];?>
                                </td>
                                <td>
                                    <?php echo $member['department_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['job_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['workshift_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['address'];?>
                                </td>
                                <td>
                                    <?php echo $member['phone_number'];?>
                                </td>
                                <td>
                                    <?php echo $member['e_id'];?>
                                </td>
                                
                            </tr>
                            <?php
            
            $sl_no++;
            };
?>
            </div>
        </div>
    </section>
    