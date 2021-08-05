<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>schedule</title>
  <style>
      * {
            font-family: sans-serif; 
            
        }
      
      .content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 1100px;
  min-height: 150px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}


  </style>    
</head>
<body>
<div class="mx-5 mt-5 text-center">


<?php
$conne=mysqli_connect("localhost","root","","CTL");
$sarchh=$_POST['search'];


  $pname=array();
  $arrid=array();
  $i=0;
  $sqle="SELECT * FROM player_info";
  $res=$conne -> query($sqle);
  while($ro=$res->fetch_assoc()){
      $pname[$i]=$ro['player_name'];
      $arrid[$i]=$ro['player_ID'];
      $i++;
  }
  $sql = "SELECT * FROM fixtures WHERE event_date='$sarchh'";
  $result = $conne->query($sql);
  if($result->num_rows > 0){
?>

  <table class="content-table">
  <thead>
      <tr>
          <th scope="col">match_number</th>
          <th scope="col">player_1</th>
          <th scope="col">p1_ID</th>
          <th scope="col">p2_ID</th>
          <th scope="col">player_2</th>
          <th scope="col">venue</th> 
          <th scope="col">date</th>
          <th scope="col">time</th>
      </tr>
  </thead>
  <tbody>
  <?php while($row = $result->fetch_assoc()){
      for($i=0;$i<count($arrid);$i++){
          if($row['player1_ID']==$arrid[$i]){$j=$i;}
          if($row['player2_ID']==$arrid[$i]){$k=$i;}
      } 
      echo '<tr>';
      echo '<th scope=row>'.$row['match_no'].'</th>';
      echo '<td>'.$pname[$j].'</td>';
      echo '<td>'.$row['player1_ID'].'</td>';
      echo '<td>'.$row['player2_ID'].'</td>';
      echo '<td>'.$pname[$k].'</td>';
      echo '<td>'.$row['venue'].'</td>';
      echo '<td>'.$row['event_date'].'</td>';
      echo '<td>'.$row['event_time'].'</td>';
     
              
      echo '</tr>';
      
  }
  
  
  ?>
    </tbody>
  </table>
  <?php }else{
    echo "no match is scheduled on this date.";
    }
  ?>
  <br/>
        <br/>
        <br/>
        
        <a href="homepage.php"><button> home</button></a>
</body>
<html>