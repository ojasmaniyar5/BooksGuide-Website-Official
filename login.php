<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body{
		background-image: url(sunset.jpg);
	} 
	
</style>
</head>
<body>
<br><br><br><br><br><br>

</body>
</html>

<?php
$n = $_POST['email'];
$p = $_POST['pass'];

$conn = mysqli_connect('localhost','root','','ojasmaniyar');
if(!$conn)
	die(mysqli_connect_error($conn));
$q = mysqli_query($conn,"Select * from MyGusets where email='$n' and pass='$p'");

$r = mysqli_fetch_row($q);
if(empty($r))
	echo "<center><h3>FAILED TO LOGIN!!!</h3></center>";
	
else{
	echo "LOGGED IN Successfully!!";	
	header('LOCATION:new1.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	button.zoom1{
  padding: 5px;

  transition: transform .2s;
  background-color: #e7e7e7; color: black;
  margin: 0 auto;
border-radius: 8px;
  display: inline-block;
}

.zoom1:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
</head>
<body>
<center><h3>Incorrect Username Or Password</h3></center>
 <center><br><h3><button class="zoom1"><a href='index.html'>Back To Home</a></button></h3><center>
</body>
</html>