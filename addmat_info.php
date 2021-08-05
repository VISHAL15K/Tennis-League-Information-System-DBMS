<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update match detail</title>
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
        <h1 class="bg-dark text-white p-2">Fixtures</h1>

        <?php
            $conne=mysqli_connect("localhost","root","","CTL");
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
            $sql = "SELECT * FROM fixtures";
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
                        
                echo '</tr>';
                $rrr=$row['match_no'];
            } 
            //echo $rrr;
            ?>
            </tbody>
        </table>
        <?php }else{
            echo "0 Results";
          }
        ?>
        <br/>
  </div>      
  <form action="new_addmat.php"  method="post">
    <div class="contiainer">
    <h1>Update</h1>
    </br>
    <p>
        <label for="matchNO">Match Number:</label>
        <input type="int" name="match_NO" id="matchNO" required>
    </p>
    <p>
        <label for="playID">Player ID:</label>
        <input type="int" name="id_plays" id="playID" required>
    </p>
    </br>
    <input type="submit" value="Submit" value="add"/><br><br>
    
    </div>
  </form> 
  <a href="after_login.php"><button> back </button></a>   
       
</body>
</html>