<?php
  $connec=mysqli_connect("localhost","root","","CTL");
  $array_id=array();
  $i=0;
  $query_id="SELECT player_ID FROM player_info;";
  $run_querry=$connec->query($query_id);
  if ($run_querry->num_rows > 0) 
  {
    while($row = $run_querry->fetch_assoc()) 
    {
      $array_id[$i]=$row["player_ID"];
      $i=$i+1;
    }
  }
  /*for($i=0;$i<count($array_id);$i++){
    echo $array_id[$i];
  }*/
  $total_ids=count($array_id);
  $total_mat=($total_ids-1)*($total_ids)/2;
  $n=1;
  $p1_ID=array();
  $p2_ID=array();

  for($l=0;$l<$total_ids;$l++){
    for($m=$l+1;$m<$total_ids;$m++){
      $p1_ID[$n]=$array_id[$l];
      $p2_ID[$n]=$array_id[$m];
      $n++;
    }

  }
  /*for($i=1;$i<$total_mat+1;$i++){
    echo $p1_ID[$i];
    echo $p2_ID[$i];
  }*/
  
  $dat=array();
  $datee="2020-01-05";
  $t="11 am";
  $ww="to be played";
  $wp=0;
  $rtp=0;
  $rtw=0;
  $del_query = "DELETE FROM fixtures";
  $run=$connec->query($del_query);
  $dell_query = "DELETE FROM match_info";
  $runs=$connec->query($dell_query);
  $delll_query = "DELETE FROM rankings";
  $runss=$connec->query($delll_query);
  for($v=1;$v<$total_mat+1;$v++){
    $datee = strftime("%Y-%m-%d", strtotime("$datee +1 day"));
    
    if($v%2!=0){
      $ven="American Sports Club";
    }
    else{
      $ven="Birminghum Sports club";
    }
    $i_query="insert into fixtures (match_no,player1_ID,player2_ID,venue,event_date,event_time) VALUES ('$v','$p1_ID[$v]','$p2_ID[$v]','$ven','$datee','$t');";
    $run=$connec->query($i_query); 
    $m_query="insert into match_info (match_no,winner,winner_points) VALUES ('$v','$ww','$wp');";
    $runs=$connec->query($m_query);
    
  }
 
  for($re=0;$re<$total_ids;$re++)
  {
    $renk=$re+1;
    $mn_query="insert into rankings (player_ID,total_points,total_wins) VALUES ('$array_id[$re]','$rtp','$rtw');";
    $runss=$connec->query($mn_query); 
  }

  header('Location: http://localhost/minipro/trig.php');


?> 
