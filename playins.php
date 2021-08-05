<?php
$connec=mysqli_connect("localhost","root","","CTL");

$name_play = $_POST['Play_name'];
$nation_ = $_POST['Countr'];
$birth_day = $_POST['D_O_B'];
$r_addriis = $_POST['Addris'];
$totmatplay = $_POST['matplayed'];
$winsrec = $_POST['winrec'];
$lossrec = $totmatplay-$winsrec;


$sql = "insert into player_info ( player_name, country,DOB,addre) VALUES ( '$name_play', '$nation_','$birth_day','$r_addriis')";
$run1=$connec->query($sql);

$take_id = "SELECT player_ID FROM player_info where player_name='$name_play' and country='$nation_' and DOB='$birth_day' and addre='$r_addriis'";
$z=0;
$taken_id=array();
$store_id=$connec->query($take_id);
if($store_id->num_rows > 0){

  while($stores_id=$store_id->fetch_assoc())
  {
    $taken_id[$z]=$stores_id["player_ID"];
    $z=$z+1;
  }
}



$z=0;
$a = $taken_id[$z];
$sqls = "insert into player_stat ( player_ID,No_matches_played, wins, lost) VALUES ( '$a','$totmatplay', '$winsrec','$lossrec')";


$run2=$connec->query($sqls);
if($run2)
{
  header('Location: http://localhost/minipro/Update_new_player.php');
}

else
{
  echo "ERRoR";
  
}
 


?>