<?php
$connec=mysqli_connect("localhost","root","","CTL");

  $playid_id = $_POST['play_iid'];
  //<?php
  //$connec=mysqli_connect("localhost","root","","CTL");
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
    if($array_id[$j]==$playid_id){
      $dilit="DELETE FROM player_info WHERE player_ID = '$playid_id'";
      $dillit=$connec->query($dilit);
      $dilitss="DELETE FROM player_stat WHERE player_ID = '$playid_id'";
      $dillitss=$connec->query($dilitss);
      if($dillit && $dillitss){
        header('Location: http://localhost/minipro/Update_new_player.php');
      }
      else{
        echo "error";
      }
    }
    else{
      
      header('Location: http://localhost/minipro/delplay.php');
      
    }
  }


  
?>