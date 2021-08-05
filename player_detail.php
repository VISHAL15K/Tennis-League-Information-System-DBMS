<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>player details</title>
  <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgb(175, 103, 103);
      }
      * {
        box-sizing: border-box;
      }
      .container {
        padding: 20px;
        background-color: rgb(119, 112, 112);
      }
      .registerbtn {
        background-color: turquoise;
        color: rgb(7, 7, 7);
        font-size: 30px;
        padding: 16px 20px;
        margin: 8px;
        cursor: pointer;
        width: 30%;
        opacity: 0.9;
      }
      .registerbtn:hover {
        opacity: 1;
      }
      .registerb {
        background-color: yellow;
        color: rgb(7, 7, 7);
        font-size: 20px;
        padding: 16px 20px;
        margin: 8px;
        cursor: pointer;
        width: 22%;
        opacity: 0.9;
      }
      .registerb:hover {
        opacity: 1;
      }

      .icontainer{
        
        margin: 30px 50px 30px 50px;
        position: top;
      }
      img.first{
        width:45%;
        float: right;
      }
  </style>
</head>
<body>
<div class = "container">
<br />
      <div class="icontainer">
          <img src="first.jpg" class="first"/>
      </div>
		

    <font size = "6">
      <a href="player_info.php" ><button class="registerbtn">PLAYER INFORMATION</button></a>
      </br></br></br></br>
      <a href="player_stat.php" ><button class="registerbtn"> PLAYER STATISTICS</button></a></br></br></br></br></br></br>
      <a href="homepage.php" ><button class="registerb"> HOME</button></a></br>
      
      <br />
    </font>  
  </nav>
		
		
 
</div>


</body>
</html>