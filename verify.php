<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><title>SSN</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
		<div>
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #10aeed;">
			<a class="navbar-brand" href="#">
				<img src="logo.jpg" width="50" alt="Logo"> SSN
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#onClickListener" aria-controls="navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
	
			<div class="collapse navbar-collapse" id="onClickListener" style="overflow: hidden;">
				<ul class="navbar-nav mr-auto ">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Home
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="signin.html">Track an application</a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						 aria-expanded="false">
							Admin Login
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Official Login</a>
	
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
				<button class="btn btn-outline-light" onclick="location.href='signup.php'" type="submit" style="margin-right: 10px">Sign Up</button>
				<button class="btn btn-outline-light" onclick="location.href='signin.html'" type="submit">Sign In</button>
	
			</div>
		</nav>
	</div>
	<div id="test">
		<div>
			<div>
				<h1> Social Security Number Maintaining System</h1>
			</div>
	
		</div>
	</div>
	
	<hr>
	<h3>Confirm Submission</h3>

	<?php 
		session_start();
    	if(isset($_POST['submit_button'])) 
    	{
			$_SESSION['User']=$_POST['first_name'];
			$first_name = $_POST['first_name'];
			$mid_name=$_POST['mid_name']; 
			$last_name=$_POST['last_name']; 
			$father_name =$_POST ['fathers_name'];
			$mother_name =$_POST ['mothers_name'];
			$gender = $_POST["gender"];
			$religion =$_POST ['religion'];
			$dobDay=$_POST ['dobDay'];
			$dobMonth=$_POST ['dobMonth'];
			$dobYear=$_POST ['dobYear'];
			$mob =$_POST ['mob'];
			$pass =$_POST ['password'];



			echo 'Full Name:  ';  

			// intitializing array
			if (!isset($_SESSION['temp_session'])) {
				// Add items
				  //$_SESSION['temp_session'] = array();
				  $_SESSION['temp_session'] = array($first_name,$mid_name,$last_name,$father_name,$mother_name,$gender,$religion,$dobDay,$dobMonth,$dobYear,$mob,$pass);
		}
//		echo $_SESSION['temp_session'][0].' '.$_SESSION['temp_session'][1];
		$len=count($_SESSION['temp_session']);
		for($i=0;$i<$len;$i++){
			echo $_SESSION['temp_session'][$i]."\n";
		}
		}	
	
	?>
	
	<button id="submit_button" name="confirm" onclick="window.location.href = 'submission.php'">Confirm</button>
	<button id="reset_button" name="back" onclick="window.location.href = 'signup.php'">Back</button>


<!-- <footer>
<div class=" footer">
	<a>Made with
		<span class="love_emoji">&#10084; </span> By The Students Of Birbhum Institute Of Engineering and Technology</a>
</div>
</footer> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
