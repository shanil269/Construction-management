<?php  //Start the Session
  require_once('connection.php');


  $username = $_POST['username'];
  $password = $_POST['password'];

  /*$username = stripcslashes['username'];
  $password = stripcslashes['password'];
  $username = mysql_real_escape_string['username'];
  $password = mysql_real_escape_string['password'];*/

  
  
  $quary = ( "select * from users where username = '$username' and password = '$password'" )
  or die("Faild to quary database".mysql_error());
                
  $row = mysql_fetch_array($quary);
  if($row['username'] == $username && $row['password'] == $password){
    echo "Login success!!! Welcome" .$row['username'];
  }else{
    echo "Failed to login!!";
  }
  

?>