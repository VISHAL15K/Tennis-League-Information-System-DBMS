<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rank</title>
  <style>
      * {
            font-family: sans-serif; 
            
        }
      
      .content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 900px;
  min-height: 500px;
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
        <!-- Table  -->
        <h1 class="bg-dark text-white p-2">Standings</h1>
        <?php
            $conne=mysqli_connect("localhost","root","","CTL");
            $sql = "SELECT * FROM rankings ORDER BY total_points DESC";
            $result = $conne->query($sql);
            $sql1 = "SELECT player_name,player_ID FROM player_info";
            $result1 = $conne->query($sql1);
            if($result->num_rows > 0){
        ?>
        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">player name</th>
                    <th scope="col">Player ID</th>
                    <th scope="col">Total Points</th>
                    <th scope="col">Total Wins</th> 
                </tr>
            </thead>
            <tbody>
            <?php 
                $rr=1;
                $cou=0;
                            $name_array=array();
                            $id_array=array();
                            while($row1 = $result1->fetch_assoc()) 
                            {
                                $name_array[$cou]=$row1["player_name"];
                                $id_array[$cou]=$row1["player_ID"];
                                $cou++;
                            }
                
                while($row = $result->fetch_assoc()){
                    for($x=0;$x<count($id_array);$x++){
                        if($id_array[$x]==$row['player_ID']){$y=$x;}
                    } 
                echo '<tr>';
                echo '<th scope=row>'.$rr.'</th>';
                echo '<td>'.$name_array[$y].'</td>';
                echo '<td>'.$row['player_ID'].'</td>';
                echo '<td>'.$row['total_points'].'</td>';
                echo '<td>'.$row['total_wins'].'</td>';        
                echo '</tr>';
                $rr++;
            } ?>
            </tbody>
        </table>
        <?php }else{
            echo "0 Results";
          }
        ?>
        <br/>
        <br/>
        <br/>
        
        <a href="homepage.php"><button> back</button></a> 
</body>
</html>