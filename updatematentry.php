<?php
  $connec=mysqli_connect("localhost","root","","CTL");
  $array_id=array();
  $i=1;
  $query_id="SELECT player_ID FROM player_info;";
  $run_querry=$connec->query($query_id);
  if ($run_querry->num_rows > 0) 
  {
    while($row = $run_querry->fetch_assoc()) 
    {
      $array_id[$i]=$row["player_ID"];
      //echo $array_id[$i];
      $i=$i+1;
    }
  }
  for($j=1;$j<count($array_id)+1;$j++){
    $rink="SELECT winner_points FROM match_info WHERE winner='$array_id[$j]'";
    $run1=$connec->query($rink);
    $r=array();
    $rr=1;
    $tps=0;
    while($row1 = $run1->fetch_assoc()) 
    {
      $r[$rr]=$row1["winner_points"];
      $tps=$tps+$r[$rr];
      $rr=$rr+1;
    }
    $tws=$tps/2;
    
    $rinnnk="UPDATE rankings SET total_points='$tps', total_wins='$tws' WHERE player_ID='$array_id[$j]'";
    $uprank=$connec->query($rinnnk);
    if($uprank){
      header('Location: http://localhost/minipro/after_login.php');
    }

  }
  
?>
