<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>statistics</title>
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
        <h1 class="bg-dark text-white p-2">Player Statistics</h1>
        <?php
            $conne=mysqli_connect("localhost","root","","CTL");
            $sql = "SELECT * FROM player_stat";
            $result = $conne->query($sql);
            $sql1 = "SELECT player_name FROM player_info";
            $result1 = $conne->query($sql1);
            if($result1->num_rows > 0 && $result->num_rows){
                
        ?>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th scope="col">player name</th>
                            <th scope="col">player_ID</th>
                            <th scope="col">Matches Played</th>
                            <th scope="col">Wins</th>
                            <th scope="col">Lost</th>     
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $cou=0;
                            $name_array=array();
                            while($row1 = $result1->fetch_assoc()) 
                            {
                                $name_array[$cou]=$row1["player_name"];
                                $cou++;
                            }
                            $cou=0;
                            while($row = $result->fetch_assoc())
                            { 
                                echo '<tr>';
                                echo '<td>'.$name_array[$cou].'</td>';
                                
                                echo '<td>'.$row['player_ID'].'</td>';
                                echo '<td>'.$row['No_matches_played'].'</td>';
                                echo '<td>'.$row['wins'].'</td>';
                                echo '<td>'.$row['lost'].'</td>';
                                echo '</tr>'; 
                                $cou++;
                            }
        
                              
                        ?>

                    </tbody>
               </table> 
            <?php 
            }
                else{
                    echo "0 Results";
                }
            ?>
        <br/>
        <br/>
        <br/>
     
        <a href="player_detail.php"><button> back</button></a> 
    </body>
</html>
           