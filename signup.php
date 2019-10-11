<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="styles.css">

<title>SSN</title>
</head>
<body>
<?php
	//if(isset($_POST['back'])){
			session_start();
			if(isset($_SESSION['temp_session']))
    		{
				$first_name = $_SESSION['temp_session'][0];
				$mid_name = $_SESSION['temp_session'][1];
				$last_name =$_SESSION['temp_session'][2];
				$father_name = $_SESSION['temp_session'][3];
				$mother_name = $_SESSION['temp_session'][4];
				$gender = $_SESSION['temp_session'][5];
				$religion =$_SESSION['temp_session'][6];
				$dob =$_SESSION['temp_session'][7];
				$mob =$_SESSION['temp_session'][8];

				session_destroy();				
			}
			
		
	//	}
		
?>
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
<div class="wrapper">
	<div class="container" style="border:1px solid black; ">
		<form autocomplete="off" name="signupform" method="POST" action="verify.php">
			<div>
				<h4 class="sml_hd">Candidate Information</h4>
				<div class="row">
					<div class="col-md-3 myDesign" >
						<label>Name
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-3 myDesign">
						<input type="text" name="first_name" placeholder="First Name" class="form-control " value="<?php if (!empty($first_name)){echo $first_name;}?>">
					</div>
					<div class="col-md-3 myDesign">
						<input type="text" name="mid_name" placeholder="Middle Name" class="form-control" value="<?php if (!empty($mid_name)){echo $mid_name;}?>">
					</div>
					<div class="col-md-3 myDesign">
						<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php if (!empty($last_name)){echo $last_name;}?>">
					</div>	
				</div>				
				<div class="row">
					<div class="col-md-3 myDesign">
						<label>Father's Name
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<input type="text" name="fathers_name" id="fathers_name" class="form-control" value="<?php if (!empty($father_name)){echo $father_name;}?>">
					</div>					
				</div>
				<div class="row">					
					<div class="col-md-3 myDesign">
						<label>Mother's Name
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<input type="text" name="mothers_name" id="mothers_name" class="form-control" value="<?php if (!empty($mother_name)){echo $mother_name;}?>">
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-3 myDesign">
						<label>Gender
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<div class="radio">
							<input id="m1" type="radio" name="gender"  value="Male"<?php if (!empty($gender)){echo ($gender=='Male')?'checked':'';} ?> checked>
							<label for="m1">
								<span>
									<span></span>
								</span>Male</label>
							<input id="m2" type="radio" name="gender" value="Female"<?php if (!empty($gender)){echo ($gender=='Female')?'checked':'';} ?>>
							<label for="m2">
								<span>
									<span></span>
								</span>Female</label>
							<input id="m3" type="radio" name="gender" value="Others"<?php if (!empty($gender)){echo ($gender=='Others')?'checked':'';} ?>>
							<label for="m3">
								<span>
									<span></span>
								</span>Others</label>
						</div>
					</div>				
				</div>
				<div class="row">
					<div class="col-md-3 myDesign">
						<label>Religion
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<select name="religion" id="religion" class="form-control">
							<option value="">Select</option>
							<option value="Hindu"<?php if (!empty($religion)&& $religion == 'Hindu')  echo 'selected = "selected"';?>>Hindu</option>
							<option value="Buddhist"<?php if (!empty($religion)&& $religion == 'Buddhist')  echo 'selected = "selected"';?>>Buddhist</option>
							<option value="Christian"<?php if (!empty($religion)&& $religion == 'Christian')  echo 'selected = "selected"';?>>Christian</option>
							<option value="Jain"<?php if (!empty($religion)&& $religion == 'Jain')  echo 'selected = "selected"';?>>Jain</option>
							<option value="Muslim"<?php if (!empty($religion)&& $religion == 'Muslim')  echo 'selected = "selected"';?>>Muslim</option>
							<option value="Parshi"<?php if (!empty($religion)&& $religion == 'Parshi')  echo 'selected = "selected"';?>>Parshi</option>
							<option value="Sikh"<?php if (!empty($religion)&& $religion == 'Sikh')  echo 'selected = "selected"';?>>Sikh</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 myDesign">
						<label>Date of Birth
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<input type="date" id="dob" name="dob" class="form-control" value="">
					</div>					
				</div>
				<div class="row">					
					<div class="col-md-3 myDesign">
						<label>Mobile No
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<input type="text" id="mob" name="mob" class="form-control" value="<?php if (!empty($mob)){echo $mob;}?>">
					</div>					
				</div>
				<div class="row">
					<div class="col-md-3 myDesign">
						<label>Password
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<input type="password" id="dob" name="password" class="form-control" value="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 myDesign">
						<label>Confirm Password
							<span style="color:#F00;">*</span>
							<span class="dots">:</span>
						</label>
					</div>
					<div class="col-md-9 myDesign">
						<input type="password" id="dob" name="Conf_password" class="form-control" value="">
					</div>
				</div>
				<div align="center">
					<input type="submit" name="submit_button" value="Submit" id="submit_button"  > 
					<input type="reset" name="reset" value="Reset" id="reset_button">
				</div>
	
				<a id="Mandatory_alert">Fields marked with
					<span style="color:#F00;">*</span> is Mandatory</a>
				<hr>
	
			</div>
		</form>
	</div>

	
</div>

	
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
