<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>World Times</title>
  <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">

function ReFresh()
{
//alert('refresh');
 $('#textOZ').load('OzTime.php?'+Math.random()).fadeIn("slow"); // Run code
 $('#textHK').load('HKTime.php?'+Math.random()).fadeIn("slow");
 $('#textUK').load('UKTime.php?'+Math.random()).fadeIn("slow");
 $('#SydneyLong').load('SydneyLong.php?'+Math.random()).fadeIn("slow");
 }
 
$( window ).load(function() {
ReFresh();
});

var auto_refresh1 = setInterval(
function ()
{
$('#textOZ').load('OzTime.php?'+Math.random()).fadeIn("slow");}, 10000
); // refresh every 10000 milliseconds

var auto_refresh2 = setInterval(
function ()
{
$('#textHK').load('HKTime.php?'+Math.random()).fadeIn("slow");}, 10000
); // refresh every 10000 milliseconds

var auto_refresh3 = setInterval(
function ()
{
$('#textUK').load('UKTime.php?'+Math.random()).fadeIn("slow");}, 10000
); // refresh every 10000 milliseconds

var auto_refresh4 = setInterval(
function ()
{
$('#SydneyLong').load('SydneyLong.php?'+Math.random()).fadeIn("slow");}, 10000
); // refresh every 10000 milliseconds

function Home()
{
 // alert( "Load was performed." );

$( "#container" ).load( "main.html", function() {
ReFresh();
 // alert( "home was performed." );
});
}

function link()
{
//  alert( "Load was performed." );

$( "#container" ).load( "link.html", function() {
//alert( "link was performed." );
});
}

</script>
  <style type="text/css">
  body {
    font-family: Georgia, "Times New Roman",
          Times, serif;
    color: purple;
   background-color:purple;	
	}

#container
{
margin-top: -20px;
 	background:url(world.jpg);
	background-size:100% 100%;
	background-repeat:no-repeat;
    left:0;
    top:0;
    height:90vh;
    width:97vw;
    position:relative;
border: 5px solid purple;
}

#navcontainer {
margin-top: -22px;
    margin-left:0;
    margin-right:0;
    background-color:#666666;
     width:97vw;
	 border: 5px solid purple;
}
#body {
    background-color:purple;//was #666666
    width:97vw;
    height:auto;
    border:2px solid #FFFFFF;
    margin-top:50px auto;
}

#image
{    
    position:absolute;
    left:0;
    top:0;
}
#textUK
{
    z-index:100;
    position:absolute;    
    color:white;
    font-size:24px;
    font-weight:bold;
    left:50%;
    top:20%;
}
#textHK
{
    z-index:100;
    position:absolute;    
    color:white;
    font-size:24px;
    font-weight:bold;
    left:70%;
    top:40%;
}
#textOZ
{
    z-index:100;
    position:absolute;    
    color:white;
    font-size:24px;
    font-weight:bold;
    left:80%;
    top:60%;
}





.navbar {
    text-align:center;
    background-color:#66FF33;
    list-style:none;
    border-bottom:none;
}

ul.navbar li {
    width:19%;
    display:inline-block;
}

ul.navbar a {
    display:block;
    width:100%;
    margin:0px;
    padding:10px;
    text-decoration:none;
}

ul.navbar a:hover {
    background-color:#33FFD7;
}
body {
    background-color:#333333;
}
  </style>
  
  </head>


<body>

<!-- Site navigation menu -->
<div id="navcontainer">
<div id="body">
    <ul class="navbar">
        <li><a href="javascript:Home()">Home</a></li>
		<li><a href='#' onclick="link();alert('it works!');">Link</a></li>
        <li><a href='#' onclick="alert('it works!');">About</a></li>
        <li><a href='#' onclick="alert('it works!');">Contact</a></li>
        <li><a href='#' onclick="alert('it works!');">Services</a></li>
    </ul>
</div>    
</div> 

 <div id="container">

<!-- Main content -->
<h1>My first styled page</h1>

<p>Welcome to my styled page!
<p id='SydneyLong'>
<p id='textOZ'>
<p id='textHK'>
<p id='textUK'>


</div>

</body>
</html>