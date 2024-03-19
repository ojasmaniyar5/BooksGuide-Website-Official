<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.btn-one {
  color: #FFF;
  transition: all 0.3s;
  position: relative;
}
.btn-one span {
  transition: all 0.3s;
}
.btn-one::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s;
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-top-style: solid;
  border-bottom-style: solid;
  border-top-color: rgba(255,255,255,0.5);
  border-bottom-color: rgba(255,255,255,0.5);
  transform: scale(0.1, 1);
  background: linear-gradient(to top, rgba(0, 0, 0, 0.5)10%,rgba(0, 0, 0, 0.5)10%);
  border-radius: 4%;
}

.btn-one:hover span {
  letter-spacing: 2px;
}
.btn-one:hover::before {
  opacity: 1; 
  transform: scale(1, 1); 
}
.btn-one::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.3s;
  background-color: rgba(255,255,255,0.1);

}
.btn-one:hover::after {
  opacity: 0; 
  transform: scale(0.1, 1);
}

span.back_to_home{
    width: 50%;
    color: black;
}

.btn {
  line-height: 50px;
  height: 50px;
  text-align: center;
  width: 250px;
  cursor: pointer;
  color: black;
}
#gfg {
            text-decoration: none;
        }

		body{
			 background-image: url(sunset.jpg);
		}

	</style>
</head>
<body>

<!-- declearation Part of servername,username,password,dbname -->
<?php
$sever ="localhost";
$username ="root";
$password ="";
$dbname ="ojasmaniyar";

//connection create.
$con = mysqli_connect("localhost", "root","","ojasmaniyar");

//connection check.
if(!$con)
{
	die("not connected: ".mysqli_connect_error());
}

//insert data.
$name = $_POST['name'];
$email =$_POST['mail'];
$username =$_POST["Username"];
$password = $_POST["Password"];
$confirmpassword = $_POST["Confirmpassword"];

//insert into table.
$sql = "INSERT INTO MyGusets(names, email, username, pass, confirm_password) VALUES ('$name','$email','$username','$password','$confirmpassword')";

//Final Result.
$result = mysqli_query($con, $sql);
if ($result)
{
	echo "<br><br><br><center><h2>Account Created Successfully.</h2></center><br><br>";
}
else
{
	echo "<br><br><br><h3>Account failed To Create</h3><br><br>".mysqli_error($con);
}
?>

<!--Button Createation -->
<center><a href="index.html" id="gfg"><div class="box-1">
  <div class="btn btn-one">
    <span class="back_to_home">Back To Home</span>
  </div>
</div></a></center><br><br></body>
</html>