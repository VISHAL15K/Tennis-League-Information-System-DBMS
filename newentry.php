<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>add player</title>
<style>
    .container{
    width: 700px;
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
    input[type="text"]{
        background-color:#009879;
        width: 200px;
        height: 35px;
        font-size: 20px;
      }
      input[type="date"]{
        background-color:#009879;
        width: 200px;
        height: 35px;
        font-size: 20px;
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
<body style = "background-color:powderblue">
<form action="playins.php" method="post">
    <div class="container">
    <h1>Add Player details</h1>
    </br>
    <p>
        <label for="PlayerName">Player Name:</label>
        <input type="text" name="Play_name" id="PlayerName" required>
    </p>
    <p>
        <label for="Country">Country:</label>
        <input type="text" name="Countr" id="Country" required>
    </p>
    <p>
        <label for="D_OB">DOB:</label>
        <input type="date" name="D_O_B" id="D_OB" required>
    </p>
    
    <p>
        <label for="Add_ress">Player Address:</label>
        <input type="text" name="Addris" id="Add_ress" required>
    </p>
    </br>
    </br>
    <h1>Add Player Statistics</h1>
    </br>
    <p>
        <label for="T_M_P">Total Matches Played:</label>
        <input type="int" name="matplayed" id="T_M_P" required>
    </p>

    <p>
        <label for="win_rec">Win Record:</label>
        <input type="int" name="winrec" id="win_rec" required>
    </p>

    
    </br>
    <input type="submit" value="Submit" value="add"/><br><br>
   

    </div>
</form>
<a href="after_login.php"><button> back </button></a>
</body>
</html>