<?php

include("config.php");
session_start();
?>
<!doctype HTML>

<html>


<title>
Trimmz-Making hair easy
</title>


<head>
<div class="topborderbox" style="background-color:white";>
<?php
if(isset($_SESSION['UserName']))
{
	echo '<a href="#"><button class="button button2">'.$_SESSION['UserName'].'</button></a> ';
	echo '<a href="logout.php"><button class="button button2">Logout</button></a>';
}
else
{
	echo '<a href="website.php"><button class="button button2">Login</button></a>';
}
?>
<center><img src="barber.png" style="width:100px;height:100px;";></center>

</div>


</head>



<style>

<!borders>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
}

.topborderbox {
padding: 7px;
  height: 140px;
  }
.secondborderbox {
padding-top: 50px;
padding-left:28%;
padding-right:28% ;
padding-bottom:50px;
  height: 250px;
  }

.thirdborderbox {
height: 800px;
background-repeat:no-repeat;
background-size: cover;
opacity: 0.75;
}
.bottomborderbox {
padding: 7px;
  height: 100px;
  }

  
<!fonts>  
  h1.headings {
  font-family: "Agency FB";
  font-weight:900;
  font-size:55px;
}
p.text{
font-family:"Times New Roman";
font-size:26px;
width: 25em
}


 
 
<!buttons>
.button {
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}



.button1 {
	background-color: Transparent;
	color: white;
	border: 3px solid #FFFFFF;
	padding: 3.5px 60px;
	font-size:27px;
	
  }

.button1:hover {background-color: black}

.button2 {
	background-color: black;
	color: white;
	border: 3px solid black;
	padding: 3.5px 60px;
	font-size:27px;
	
  }

.button2:hover {background-color: black}



  



</style>
<body>
<div class="secondborderbox" style="background-color:#f2f2f2";>
<center><h1 class="headings";>what we do</h1>
<p class="text";> Here at Trimzz we take the stress out of having a haircut and bring finding and discovering barber and hairdresser shops around Bristol which is all possible from the palm of your hands. </P>
</center>
</div>


<div class="thirdborderbox" style="background-image:url(barbershop.jpg)";>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><p class="text" style="color:white";>Our service allows you to search for a range of barber shops all around Bristol and with great features that allow you to specific pick what is best for you it is a no brainer. </p>
<a href="Mensbarbershops.html"><button class="button button1">Men</button></a>
</center>
</div>

<div class="thirdborderbox" style="background-image:url(women.jpg)";>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><p class="text" style="color:white";>Find local hairdressers now around bristol you only a couple clicks away from finding your new hairdressers. </p>
<button class="button button1">Women</button>
</div>

<div class="thirdborderbox" style="background-image:url(kids.png)";>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><p class="text" style="color:white";>We even do kids! Look for your nearest shop and make your kids look all smart for school. </p>
<button class="button button1">Kids</button>
</div>

<div class="bottomborderbox" style="background-color:black">

</div>
</body>	
</html>	