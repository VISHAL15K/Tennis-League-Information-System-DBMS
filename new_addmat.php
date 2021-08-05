<?php
$conne=mysqli_connect("localhost","root","","CTL");

$cout="SELECT match_no FROM match_info;";
$run_cout=$conne->query($cout);
while($rr=$run_cout->fetch_assoc()){$rrr=$rr["match_no"];}

$game_no = $_POST['match_NO'];
$ID_playy= $_POST['id_plays'];     
if(($game_no<=$rrr) && ($game_no>0)){
  $varyy="SELECT player1_ID,player2_ID FROM fixtures WHERE match_no='$game_no'";
  $ress=$conne->query($varyy);
  while($row11=$ress->fetch_assoc()){
    $a=$row11["player1_ID"];
    $b=$row11["player2_ID"];
  }
  if($ID_playy==$a){
    $idwin=$a;
    $idlos=$b;
  }
  else{
    $idwin=$b;
    $idlos=$a;
  }
  if(($ID_playy==$a) || ($ID_playy==$b)){
    $q1="SELECT winner FROM match_info WHERE match_no='$game_no'";
    $rq1=$conne->query($q1);
    while($rowe=$rq1->fetch_assoc()){
      $winn_n=$rowe['winner'];
    }
    $up_dat="UPDATE match_info SET winner ='$ID_playy', winner_points='2' WHERE match_no='$game_no'";
    $uprun=$conne->query($up_dat);
    if($uprun){
     
      $cmp="SELECT player_ID,No_matches_played,wins,lost FROM player_stat WHERE player_ID='$idwin' OR player_ID= '$idlos'";
      $runcmp=$conne->query($cmp);
      while($roww=$runcmp->fetch_assoc()){
        if($roww['player_ID']==$idwin){
          $wcm=$roww['No_matches_played'];
          $wcw=$roww['wins'];
          $wcl=$roww['lost'];
        }
        else{
          $lcm=$roww['No_matches_played'];
          $lcl=$roww['lost'];
          $lcw=$roww['wins'];
        }
      }
      if($winn_n=="to be played"){
        $wcm++;$wcw++;$lcm++;$lcl++;
      }
      else if($winn_n==$ID_playy){

      }
      else{
        $wcw++;$wcl--;$lcw--;$lcl++;
      }

            
      $updatwinstat="UPDATE player_stat SET No_matches_played = '$wcm',wins='$wcw',lost='$wcl' WHERE player_ID ='$idwin'";
      $updatlosstat="UPDATE player_stat SET No_matches_played = '$lcm' , lost='$lcl',wins='$lcw' WHERE player_ID ='$idlos'";
      $rupdatwinstat=$conne->query($updatwinstat);
      $rupdatlosstat=$conne->query($updatlosstat);
      if(($rupdatwinstat) || ($rupdatlosstat)){ //echo " Success ";
      header('Location: http://localhost/minipro/updatematentry.php');
    }
    }
    else{
      echo "error";
    }
  }
  else{
    echo "wrong";
  }
}
else{
  echo "wrong";
}  
?> 