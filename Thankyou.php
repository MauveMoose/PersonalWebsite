<!DOCTYPE html>
<html>
<head><title> Siddhant's Portfolio </title>
<link href="maincss.css" type="text/css" rel=stylesheet>
<style>

</style>
<script type="text/javascript">
function search(){
	var n = document.getElementById("s").value;
	var t = n.toLowerCase();
	if(t=="dogs" || t=="dog" || t=="sleeping dogs" || t=="sleeping dog"){
		window.open("Dogs.html");}
	else if(t=="floral" || t=="flower" || t=="flowers" || t=="floral close-ups"|| t=="floral closeups"||t=="floral close ups" || t=="floral close-up"|| t=="floral closeup"||t=="floral close up"){
		window.open("Flowers.html");}
	else if(t=="puppies" || t=="puppy" || t=="pup" || t=="pups"){
		window.open("Puppies.html");}
	else if(t=="sky" || t=="skies" || t=="skies and scenery" || t=="scenery" || t=="sceneries" || t=="sky scenery" || t=="skies scenery"){
		window.open("Sky.html");}
	else if(t=="video" || t=="videos"){
		window.open("Videos.html");}
	else if(t=="connect" || t=="connect with me" || t=="connect me" || t=="contact" || t=="contact me"){
		window.open("ContactMe.html");}
	else if(t=="me" || t=="about me" || t=="aboutme"){
		window.open("aboutme.html");}
	else{
		alert("Invalid search term! Try again");}
}
</script>
</head>

<body>

<header>
<h1 class="mainheader"> Siddhant's Portfolio </h1>
<h2 class="subheader"> A collection of my favorite pics </h2>
<table align=right>
<form>
<tr>
<td><button onclick="search()"> Search </button></td>
<td><input type="text" id="s" placeholder="Enter search term here.." width=300></td>
</tr>
</form>
</table>

</header>

<nav>
&nbsp;<a href="aboutme.html">About Me</a> |&nbsp; 
&nbsp;<a href="Dogs.html">Sleeping Dogs</a> |&nbsp; 
&nbsp;<a href="Flowers.html">Floral close-ups</a> |&nbsp; 
&nbsp;<a href="Puppies.html">Puppies</a> |&nbsp; 
&nbsp;<a href="Sky.html">Skies and Scenery</a> |&nbsp; 
&nbsp;<a href="Videos.html">Videos</a> |&nbsp; 
&nbsp;<a href="ContactMe.html">Connect with Me</a> &nbsp;
</nav>

<section style="background-image:url('qmark.png'); background-size:20%; background-repeat:space; padding:10px">
<?php

$con = mysqli_connect("localhost", "root", "system");
mysqli_query($con, "use sampledb");
$var = $_POST['name'];
$var1 = $_POST['email'];
$var2 = $_POST['mnumber'];
$var3 = $_POST['date'];
$var4 = $_POST['feedback'];
$var5 = "No";
$var6 = "No";
$var7 = "No";
$var8 = "No";
if(!empty($_POST['comm'])){
	$var5="Yes";}
if(!empty($_POST['report'])){
	$var6="Yes";}
if(!empty($_POST['collab'])){
	$var7="Yes";}
if(!empty($_POST['chat'])){
	$var8="Yes";}
$query = "insert into project values('$var', '$var1', '$var2', '$var3', '$var5', '$var6', '$var7', '$var8', '$var4')";
mysqli_query($con, $query);
mysqli_close($con);
?>

<table cellspacing=20px align="center">
<tr>
<th> <h1 class="tableheader" style="font-size:120px;"> Thank you for contacting me! </h1></th>
</tr>
<tr>
<th> <h1 class="tableheader" style="font-size:50px;"> Your response has been recorded, and I'll get back to you shortly. </h1></th>
</tr>
<tr>
<td align="center"> <a href="aboutme.html" style="font-size:28px;">Return home</a></td>
</tr>
</table>
</section>

<footer>
&copy; 2023-2027 Siddhant Shirke 31011123060 FY Bsc. CS
</footer>

</body>
</html>