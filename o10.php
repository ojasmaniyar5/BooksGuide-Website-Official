<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment method</title>
	<style>
		.book-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.book {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    text-align: center;
}

.book img {
    max-width: 100%;
    height: auto;
}
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}
	</style>
</head>
<body bgcolor="gray">
	<header>
        <h1>BooksGuide</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="books.html">Books</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
        </nav>
    </header>
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
$email =$_POST['email'];
$mobile =$_POST["mobile"];
$address = $_POST["address"];

//insert into table.
$sql = "INSERT INTO customers_details(name, email, mobile, address) VALUES ('$name','$email','$mobile','$address')";

//Final Result.
$result = mysqli_query($con, $sql);
if ($result)
{
    echo "<center><h2>Details Verified Successfully.</h2></center>";
}
else
{
    echo "<h3>Account failed To Create</h3><br>".mysqli_error($con);
}
?>

	<section class="book-list">
            <article class="book">
            <img src="a.jpg" alt="Book Title">
                <h2>A feelings of Millions.</h2>
                <p>Author: Anubhav Agarwal.</p>
                <p>Price: $16.36</p>
		</article>
		<article class="book">
				<?php
					$name=$_POST['name'];
					$email=$_POST['email'];
					$number=$_POST['mobile'];
					$address=$_POST['address'];

					echo "<br><br><u>Customer Name</u> : ".$name;
					echo "<br><br><u>Email ID</u> : ".$email;
					echo "<br><br><u>Mobile Number</u> : ".$number;
					echo "<br><br><u>Address</u> : ".$address;
				?>
				<br><br>
				<hr>
                <br>
                <br>
            	<button><a href="order.php">Place Order</a></button>
            	<button><a href="payment1.html">Cancle</a></button><br><br>
            	<button><a href="new.html">Back To Home</a></button>
            	<button><a href="books.html">Back To Book-list</a></button><br>

		</article>
	</section>
	<footer>
        <p>&copy; 2023 BooksGuide. All rights reserved.</p>
    </footer>
	
</body>

</html>


	
















