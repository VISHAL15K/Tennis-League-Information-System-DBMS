<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update</title>
  <style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(175, 103, 103);
}
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: rgb(119, 112, 112);
}
.registerbtn {
  background-color: turquoise;
  color: rgb(7, 7, 7);
  padding: 16px 20px;
  margin: 8px;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
.registerbt {
  background-color: yellow;
  color: rgb(7, 7, 7);
  padding: 16px 20px;
  margin: 8px;
  cursor: pointer;
  width: 22%;
  opacity: 0.9;
}
.registerbt:hover {
  opacity: 1;
}
.icontainer{
  
  margin: 30px 50px 30px 50px;
  position: top;
}
img.aaa{
  width:45%;
  float: right;
}
</style>
</head>
<body>
<br />
<div class = "container">

      <div class="icontainer">
          <img src="aaa.jpg" class="aaa"/>
      </div>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base inherit-left">
    <font size = "6">
    </br>
      <a href="newentry.php" class="mr-5 hover:text-gray-900"><button class="registerbtn"> ADD PLAYER</button></a></br></br></br></br>
      <a href="addmat_info.php" class="mr-5 hover:text-gray-900"><button class="registerbtn">UPDATE MATCH DETAILS</button></a></br>
      </br></br></br>
      <a href="delplay.php" class="mr-5 hover:text-gray-900"><button class="registerbtn">DELETE PLAYER</button></a></br></br></br></br></br>
      <a href="homepage.php"><button class = "registerbt">HOME</button></a>
      <br />
    </font>  
  </nav>
		
		
 
</div>

</body>
</html>


