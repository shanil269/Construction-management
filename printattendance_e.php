<?php
	require_once('connection.php');
    require_once"include/print_header.php";
    
    
	
	if (!mysqli_connect_errno())
	{
		$cons = mysqli_query($con, "SELECT * FROM attendance_e ");
		mysqli_close($con);
		}
	?>
    <section id="list">
        <div class="container-fluid">
            <div class="container col-lg-6"> 
                <h3>Attendance list</h3></a>
                <table class="info">
                    <table width="80%" border="1">
                    <thead>
                        <th>SL#</th>
                        <th>  Employee ID </th>
                        <th>  Date  </th>
                        <th>  Attendance  </th>
                        
                    
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
                                    <?php echo $member['e_id'];?>
                                </td>
                                <td>
                                    <?php echo $member['date'];?>
                                </td>
                                <td>
                                    <?php echo $member['attendance'];?>
                                </td>
                                
                            </tr>
                            <?php
            
            $sl_no++;
            };
?>
            </div>
        </div>
    </section>