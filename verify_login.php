<?php
$connec=mysqli_connect("localhost","root","","CTL");

$username1= $_POST['username_entered'];
//$username1='admin1';
//echo $username;
$password1= $_POST['password_entered'];
//$password1='admin2';
$user_tab="SELECT pword FROM ad_login where Admin_id='$username1';";
$run_querry=$connec->query($user_tab);
if($run_querry->num_rows == 1){
while($row = $run_querry->fetch_assoc()){
  //echo $row["pword"];
  $pwd=$row["pword"];
} 
}
else{
  echo "Error";
  header('Location: http://localhost/minipro/enroll.php');
}

if ($pwd==$password1){
  header('Location: http://localhost/minipro/after_login.php');
}
else{
  header('Location: http://localhost/minipro/enroll.php');
}



?>