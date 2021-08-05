<html>
  <head>
    <title>
      admin login
    </title>
    <style>
      body{
        font-family: Ariel, Helvetica, sans-serif;
        
      }
     
      input[type=text],input[type=password]{
        width: 45%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(255, 255, 255);
        box-sizing: border-box;
      }
      button{
        background-color: green;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 45%
      }
      button:hover{
        opacity: 0.8;
      }
      a {
        color: blue;
      }
      .imgcontainer{
        text-align: left;
        margin: 5px 0 12px 140px;
        position: relative;
      }
      .imcontainer{
        
        margin: 0 50px 30px 50px;
        position: top;
      }
      img.logo{
        width: 15%;
        border-radius: 30%;
      }
      img.wall{
        width:33%;
        float: right;
      }
      .modal{
        background-color: rgb(119, 112, 112);
        overflow: auto;
        padding-top: 20px;
        width: 100%;
        height: 100%;
        top: 0%;
        left: 0%;
        z-index: 1;
        position: fixed;
      }
      .modal-container{
        background-color: white;
        margin: 5% auto 15% auto;
        border: 1px solid #888;
        width: 100%;
      }
      .container{
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }
    </style>
  </head>
  <body>
  <div class="modal">
    <form action="verify_login.php" method="POST" class="modal-content animate">
      <div class="imcontainer">
        <img src="wall.jpg" class="wall"/>
      </div>
     
      <h1>CHAMPIONS TENNIS LEAGUE </h1>

      <div class="imgcontainer">
        <img src="logo.jpg" class="logo"/>
      </div>
      
     
    <div class="container">
      <p>
        <label>
          Username
          <br/>
        
        </label>
        <input type="text" placeholder="Username" name="username_entered" required>
      </p>
      <br />
      <p>
        <label>
          Password
          <br/>
        </label>
        <input type="password" placeholder="password" name="password_entered" required>
      </p>
      <br />
      <input type="checkbox" />Remember me
      <br/>
      <br/>
      
      <input type="submit" name="submit" value="Log in"/><br><br>
      
      
         <a href="homepage.php">Home</a></p>
      

    </div>
    </form>
  </div>
  </body>
</html>
