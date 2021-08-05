<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Home</title>
  <style>
		
      
      .registerbtn {
        background-color: rgb(121,220,240);
        color: rgb(7, 7, 7);
        font-size:26px;
        padding: 16px 20px;
        margin: 8px;
        cursor: pointer;
        width: 20%;
        opacity: 0.9;
      }
      .registerbtn:hover {
        opacity: 1;
      }
      .contt {
        font-family: arial, "Times New Roman";
        color: rgb(51,29,29);
        font-size:32px;
        text-align:center;
      }
      .caree {
        font-family: arial, "Times New Roman";
        color: gold;
        font-size:20px;
        text-align:center;
      }
      .conttii {
        font-family: arial, "Times New Roman";
        color: rgb(51,29,29);
        font-size:28px;
        text-align:right;
      }
      .registerbt {
        background-color: lightblue;
        color: rgb(7, 7, 7);
        font-size: 19px;
        padding: 16px 20px;
        margin: 8px;
        cursor: pointer;
        width: 15%;
        opacity: 0.9;
      }
      .registerbt:hover {
        opacity: 1;
      }
      input[type="date"]{
        background-color:lightgreen;
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
<body background ="work out111.jpg">
<header >
  <div >
    <font size = "6">
    </br>
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<a href="player_detail.php" font = "large" ><button class="registerbtn">PLAYER DETAILS</button></a>&ensp;&ensp;&ensp;&ensp;
      <a href="match_details.php" ><button class="registerbtn">MATCH DETAILS</button></a>&ensp;&ensp;&ensp;&ensp;&ensp;
      <a href="rank.php"><button class="registerbtn">STANDINGS</button></a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      </br></br>
      
      
    </font> 
    <div class="caree">
      <form action="searchmat.php" method="post">
        <label><h2>Enter the date to view upcoming match : </h2></label>
          <input type="date" name="search" required>
          <input type="submit" name="submit" value="Search" >
      </form> 
    </div>
 

    </br>
    </br></br>
      </br></br>      </br>
           
      <div class="contt">
        <h1><b><u>CTL - CHAMPIONS TENNIS LEAGUE</b></u></h1>
        <h2><b><u>2020</u></b></h2>
     </div>
     </br>
     <div class="conttii">
        <a href="enroll.php"><button class = "registerbt">ADMIN USER</button></a>
     </div>    
    
   
    
    
  </div>
</body>
</html>

