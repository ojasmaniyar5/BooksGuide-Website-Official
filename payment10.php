<!DOCTYPE html>
<html>
<head><style>
	form{
		border:1px solid black;
		width:300px;
		height:300px;
		align:center; 
		margin:auto;
		width:30%;
		padding:10px;
		background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%);
		color: #fff;
		font-size: 15px;
		letter-spacing: 1px;
		margin-top: 40px;
		font-family: sans-serif;
		}
body{  
		background-image:url("#") ;
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

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paymnent Getaway</title>
	<link rel="stylesheet" type="text/css" href="payment.css">
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
	<br>
	<hr>
		<center><h1>Payment Get-a-Way</h1></center>
	<hr>
	<div class="row" style="padding: 100px;">
		<div class="col-50">
			<div class="container">
				<form action="o10.php" method="post" style="padding: 25px;" align="center">
					
					<div class="row">
					<div class="col-50">	
							<h3 style="text-align: center;margin: 20px 10px;font-family: lato;">Checkout form</h3>
							
							<label for="fname"><i class="fa fa-user"></i>Full Name-</label>
							<input type="text" id="fname" name="name" placeholder="Enter Your Full Name" required><br><br>

							<label for="email"><i class="fa fa-envelope"></i>Email-</label>
							<input type="text" id="email" name="email" placeholder="Enter Your Email" required><br>
							<input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
							<input type="hidden" value="<?php echo 1;?>" name="amount"><br>

							<label for="city"><i class="fa fa-mobile"></i>Mobile-</label>
							<input type="text" id="city" name="mobile" placeholder="Mobile Number" required><br><br>

							<label for="adr"><i class="fa fa-address-card-o"></i>Address-</label>
							<textarea placeholder="Enter address" name="address" required> </textarea><br><br>

						</div>
						<input type="submit" value="Pay Now" class="btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	<hr>
		<center><a href="new.html"><input type="button" name="b1" value="Back To Home"></a></center>
	<hr>
	<footer>
        <p>&copy; 2023 BooksGuide. All rights reserved.</p>
    </footer>
</body>
</html>