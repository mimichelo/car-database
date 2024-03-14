<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Search</title>
  <style type="text/css">
.auto-style1 {
	text-align: left;
}
.auto-style2 {
	margin-left: 0px;
}

.overlay-text{
  background-color:rgba(255, 255, 255, 0.5);
  padding:20px;
  text-align:center;
  position: absolute;
  top:50%;
  right:50%;
  transform:translate(50%, -50%);
}
.auto-style3 {
	text-align: center;
}
.auto-style4 {
	margin-top: 5px;
}
</style>
</head>
<body>
  <div class="auto-style1">

  	<div class="auto-style3">

  <img src="images/car2.jpg" alt="Car" width="615" height="362" class="auto-style2"><label id="Label1"></label>
  	  <br></div>
  </div>
  <div class="overlay-text" style="right: 51%; top: 16%; background-color: #FFFFFF; color: #008000;">
    <h1>Get ready to find your next car</h1>
  </div>
  
  <form name="form1" method="get" action="search_results.php">
      <div class="auto-style3">
		<input type="text" placeholder="Search" name="search" aria-label="Search" required>
		<input type="submit" value="Search" name="submit"></input>
	</div>
	</form>
  <hr>
  <p style="width: 1219px">
  <img alt="" height="139" src="images/Toyota Tundra.png" width="261"><img alt="" class="auto-style4" height="126" src="images/Rav4Prime.png" width="266"><img alt="" height="132" src="images/car.png" width="275">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img alt="" height="132" src="images/Accent-Sport-Front34-LakeSilver-1000x667_0518.png" width="275"></p>
  <p style="width: 1161px"><a href="direct_link.php?category=trucks">Trucks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <a href="direct_link.php?category=suvs">SUVs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <a href="direct_link.php?category=sedans">Sedans</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <a href="direct_link.php?category=hatchbacks">Hatchbacks</a></p>

  <p style="width: 1161px">&nbsp;</p>
  <p style="width: 1161px">&nbsp;</p>
  <p style="width: 1161px">
  <img alt="" height="132" src="images/217adfedd37287b44328914f12481f2c.png" width="275"><img alt="" height="132" src="images/purepng.com-ford-mustang-convertible-carcarcarsvehiclevehiclestransport-561521126471xmt08.png" width="275"></p>
  <p style="width: 1161px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="direct_link.php?category=minivans">Minivans</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="direct_link.php?category=convertibles">Convertibles</a></p>

  </body>
</html>