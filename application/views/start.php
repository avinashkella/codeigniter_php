<!DOCTYPE html>
<html>
<head>
	<title>Education</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	<style type="text/css">
		#bdy
		{
			margin:0px;
			background:#FFF;
			height:600px;
			background-image:url(imges/back.PNG);
			background-repeat:no-repeat;
			overflow:hidden;
			position:relative;
		}
		ul.topnav {
  			list-style-type: none;
  			margin: 0;
  			padding: 0;
  			overflow: hidden;
  			background-color:#F00;
			opacity:0.7;
			}
		ul.topnav li 
		{
			float: left;
		}
		ul.topnav li a 
		{
  			display: inline-block;
  			color: #000000;
  			text-align: center;
  			padding: 14px 16px;
			font-weight:bold;
  			text-decoration: none;
  			transition: 0.3s;
  			font-size: 17px;
		}
		ul.topnav li a:hover 
		{
			background-color:#0F0;
			color:#FFF;
			opacity:0.8;
		}
		ul.topnav li.icon 
		{
			display: none;
		}	
		#red
		{
			float:left;
			position:relative;
			width:600px;
			height:400px;
		}
		#red_text
		{
			z-index:100;
			position:absolute;
			color:#FFF;
			font-size:36px;
			font-weight:bold;
			left:200px;
			top:20px;
		}
		#text1
		{
			position:absolute;
			color:#000;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
			font-style:italic;
			font-size:24px;
			font-weight:bold;
			left:90px;
			top:450px;
		}
		#text1:hover
		{
			position:absolute;
			color:#FFF;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
			font-style:italic;
			font-size:24px;
			font-weight:bold;
			left:90px;
			top:450px;
		}
		#text2
		{
			position:absolute;
			color:#000;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
			font-style:italic;
			font-size:24px;
			font-weight:bold;
			left:800px;
			top:500px;
		}
		#text2:hover
		{
			position:absolute;
			color:#FFF;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
			font-style:italic;
			font-size:24px;
			font-weight:bold;
			left:800px;
			top:500px;
		}
		#green
		{
			margin-left:665px;
		}
		#green_text
		{
			z-index:100;
			position:absolute;
			color:#FFF;
			font-size:36px;
			font-weight:bold;
			left:940px;
			top:80px;
		}
		#button
		{
			position:absolute;
			background-color:#F00;
			padding:10px;
			text-decoration:none;
			opacity:0.8;
			font-weight:bold;
			margin-left:200px;
			margin-top:140px;
			top:250px;
			color:#FFF;
		}
		#button:hover
		{
			position:absolute;
			background-color:#FFF;
			padding:10px;
			text-decoration:none;
			opacity:0.8;
			font-weight:bold;
			margin-left:200px;
			margin-top:140px;
			top:250px;
			color:#F00;
		}		
		#button1
		{
			position:absolute;
			background-color:#090;
			padding:10px;
			text-decoration:none;
			opacity:0.8;
			font-weight:bold;
			margin-left:300px;
			margin-top:140px;
			top:300px;
			color:#FFF;
		}
		#button1:hover
		{
			position:absolute;
			background-color:#FFF;
			padding:10px;
			text-decoration:none;
			opacity:0.8;
			font-weight:bold;
			margin-left:300px;
			margin-top:140px;
			top:300px;
			color:#090;
		}
		#logo
		{
			position:absolute;
			opacity:0.6;
			margin-left:555px;
			border-radius:20%;
			margin-top:120px;
			top:250px;	
		}					
	</style>
</head>

<script src="http://localhost/ci/assets/js/jquery-1.10.2.js"></script>
<script src="http://localhost/ci/assets/js/bootstrap.js"></script>
<script src="http://localhost/ci/assets/js/jquery.flexslider.js"></script>
<script src="http://localhost/ci/assets/js/scrollReveal.js"></script>
<script src="http://localhost/ci/assets/js/jquery.easing.min.js"></script>
<script src="http://localhost/ci/assets/js/custom.js"></script>

<body id="bdy">
	<div>
	<ul class="topnav" id="myTopnav">
  		<li style="margin-left:590px;"><a href="http://localhost/ci/index.php/about">ABOUT</a></li>
  		<li><a href="http://localhost/ci/index.php/contact">CONTACT US</a></li>
  		</li>
	</ul>
</div>

<div id="red">
	<img src="http://localhost/ci/imges//red.png" width="660px" height="659px" style="opacity:0.6; position:absolute;">
    <p id="red_text">EDUCATION</p>
    <a href="http://localhost/ci/index.php/university" class="btn btn-info btn-set" id="button"  >DEPARTMENTS</a>
    <p id="text1">Education is the key to unlock the golden  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 		    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; door of freedom</p>
</div>



<div id="green">
	 <img src="http://localhost/ci/imges//green.png" width="700px" height="659px" style="opacity:0.7">
     <p id="green_text">JOBS</p>
     <a href="#" class="btn btn-info btn-set" id="button1"  >FEILDS</a>
     <p id="text2">Opportunities don't happen, you <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     &nbsp; create them</p>
</div>

<div id="logo">
	<img src="http://localhost/ci/imges//logo.PNG" height="200" width="200" style="border-radius:20%;">
</div>
</body>
</body>
</html>