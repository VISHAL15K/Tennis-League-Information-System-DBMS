<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>trigger</title>
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
        <h1 class="bg-dark text-white p-2">logs</h1>
        </br>
        <?php
            $conne=mysqli_connect("localhost","root","","CTL");
            $sql = "SELECT * FROM logs";
            $result = $conne->query($sql);
            if($result->num_rows > 0){
        ?>
        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">player_ID</th>
                    <th scope="col">action</th>
                    <th scope="col">cdate</th> 
                    
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()){ 
                echo '<tr>';
                echo '<th scope=row>'.$row['id'].'</th>';
                echo '<td>'.$row['player_ID'].'</td>';
                echo '<td>'.$row['action'].'</td>';
                echo '<td>'.$row['cdate'].'</td>';
               
               
                        
                echo '</tr>';
            } ?>
            </tbody>
        </table>
        <?php }else{
            echo "0 Results";
          }
        ?>
        </br>
        <a href="after_login.php"><button>back</button></a>
    </body>
</html>