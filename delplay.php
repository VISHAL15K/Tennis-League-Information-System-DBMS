<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>delete player</title>
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
.contiainer{
    width: 500px;
    max-width: 100%;
    padding: 35px;
    border-radius: 10px;
    margin: 100px auto 0;
    position: relative;
    background: #fff;
    box-shadow: 10px 10px 10px #00000080;
    border-top: 20px solid #1ab188;
    font-size: 30px;
    text-align: center;
    }
    input[type="int"]{
        background-color:#009879;
        width: 200px;
        height: 35px;
        font-size: 20px;
      }
      input[type="submit"]{
        
        width: 110px;
        height: 35px;
        font-size: 20px;
      }
</style>    
</head>
<body>
<div class="mx-5 mt-5 text-center">
        <!-- Table  -->
        <h1 class="bg-dark text-white p-2">Player information</h1>
        </br>
        <?php
            $conne=mysqli_connect("localhost","root","","CTL");
            $sql = "SELECT * FROM player_info";
            $result = $conne->query($sql);
            if($result->num_rows > 0){
        ?>
        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col">player_ID</th>
                    <th scope="col">player_name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Country</th> 
                    <th scope="col">Address</th> 
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()){ 
                echo '<tr>';
                echo '<th scope=row>'.$row['player_ID'].'</th>';
                echo '<td>'.$row['player_name'].'</td>';
                echo '<td>'.$row['DOB'].'</td>';
                echo '<td>'.$row['country'].'</td>';
                echo '<td>'.$row['addre'].'</td>';
               
                        
                echo '</tr>';
            } ?>
            </tbody>
        </table>
        <?php }else{
            echo "0 Results";
          }
        ?>
        <br/>
  </div>        
</head>
<body >
<form action="actdelete.php" method="post">
<div class="contiainer">  
  
    <h1>Delete Player </h1>
    </br>
    <p>
        <label for="Playeridid">Player Id:</label>
        <input type="int" name="play_iid" id="Playeridid" required>
    </p>
   

    
    </br>
    <input type="submit" value="Submit" value="add"/><br><br>
    
  
</div>
</form>
<a href="after_login.php"><button> back </button></a>
</body>
</html>