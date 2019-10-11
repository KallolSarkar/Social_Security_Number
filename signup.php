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
				$dobDay =$_SESSION['temp_session'][7];
				$dobMonth =$_SESSION['temp_session'][8];
				$dobYear =$_SESSION['temp_session'][9];
				$mob =$_SESSION['temp_session'][10];

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
						<input type="text" name="first_name" placeholder="First Name" class="form-control " value="<?php if (!empty($first_name)){echo $first_name;}?>" required>
					</div>
					<div class="col-md-3 myDesign">
						<input type="text" name="mid_name" placeholder="Middle Name" class="form-control" value="<?php if (!empty($mid_name)){echo $mid_name;}?>">
					</div>
					<div class="col-md-3 myDesign">
						<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="<?php if (!empty($last_name)){echo $last_name;}?>" required>
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
						<input type="text" name="fathers_name" id="fathers_name" class="form-control" value="<?php if (!empty($father_name)){echo $father_name;}?>"required>
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
						<input type="text" name="mothers_name" id="mothers_name" class="form-control" value="<?php if (!empty($mother_name)){echo $mother_name;}?>"required>
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
					<div class="col-md-3 myDesign">
						<select name="dobDay" class="form-control">
							<option value="">Day</option>
							<option value="01"<?php if (!empty($dobDay)&& $dobDay == '01')  echo 'selected = "selected"';?>>01</option>
							<option value="02"<?php if (!empty($dobDay)&& $dobDay == '02')  echo 'selected = "selected"';?>>02</option>
							<option value="03"<?php if (!empty($dobDay)&& $dobDay == '03')  echo 'selected = "selected"';?>>03</option>
							<option value="04"<?php if (!empty($dobDay)&& $dobDay == '04')  echo 'selected = "selected"';?>>04</option>
							<option value="05"<?php if (!empty($dobDay)&& $dobDay == '05')  echo 'selected = "selected"';?>>05</option>
							<option value="06"<?php if (!empty($dobDay)&& $dobDay == '06')  echo 'selected = "selected"';?>>06</option>
							<option value="07"<?php if (!empty($dobDay)&& $dobDay == '07')  echo 'selected = "selected"';?>>07</option>
							<option value="08"<?php if (!empty($dobDay)&& $dobDay == '08')  echo 'selected = "selected"';?>>08</option>
							<option value="09"<?php if (!empty($dobDay)&& $dobDay == '09')  echo 'selected = "selected"';?>>09</option>
							<option value="10"<?php if (!empty($dobDay)&& $dobDay == '10')  echo 'selected = "selected"';?>>10</option>
							<option value="11"<?php if (!empty($dobDay)&& $dobDay == '11')  echo 'selected = "selected"';?>>11</option>
							<option value="12"<?php if (!empty($dobDay)&& $dobDay == '12')  echo 'selected = "selected"';?>>12</option>
							<option value="13"<?php if (!empty($dobDay)&& $dobDay == '13')  echo 'selected = "selected"';?>>13</option>
							<option value="14"<?php if (!empty($dobDay)&& $dobDay == '14')  echo 'selected = "selected"';?>>14</option>
							<option value="15"<?php if (!empty($dobDay)&& $dobDay == '15')  echo 'selected = "selected"';?>>15</option>
							<option value="16"<?php if (!empty($dobDay)&& $dobDay == '16')  echo 'selected = "selected"';?>>16</option>
							<option value="17"<?php if (!empty($dobDay)&& $dobDay == '17')  echo 'selected = "selected"';?>>17</option>
							<option value="18"<?php if (!empty($dobDay)&& $dobDay == '18')  echo 'selected = "selected"';?>>18</option>
							<option value="19"<?php if (!empty($dobDay)&& $dobDay == '19')  echo 'selected = "selected"';?>>19</option>
							<option value="20"<?php if (!empty($dobDay)&& $dobDay == '20')  echo 'selected = "selected"';?>>20</option>
							<option value="21"<?php if (!empty($dobDay)&& $dobDay == '21')  echo 'selected = "selected"';?>>21</option>
							<option value="22"<?php if (!empty($dobDay)&& $dobDay == '22')  echo 'selected = "selected"';?>>22</option>
							<option value="23"<?php if (!empty($dobDay)&& $dobDay == '23')  echo 'selected = "selected"';?>>23</option>
							<option value="24"<?php if (!empty($dobDay)&& $dobDay == '24')  echo 'selected = "selected"';?>>24</option>
							<option value="25"<?php if (!empty($dobDay)&& $dobDay == '25')  echo 'selected = "selected"';?>>25</option>
							<option value="26"<?php if (!empty($dobDay)&& $dobDay == '26')  echo 'selected = "selected"';?>>26</option>
							<option value="27"<?php if (!empty($dobDay)&& $dobDay == '27')  echo 'selected = "selected"';?>>27</option>
							<option value="28"<?php if (!empty($dobDay)&& $dobDay == '28')  echo 'selected = "selected"';?>>28</option>
							<option value="29"<?php if (!empty($dobDay)&& $dobDay == '29')  echo 'selected = "selected"';?>>29</option>
							<option value="30"<?php if (!empty($dobDay)&& $dobDay == '30')  echo 'selected = "selected"';?>>30</option>
							<option value="31"<?php if (!empty($dobDay)&& $dobDay == '31')  echo 'selected = "selected"';?>>31</option>
						</select>					
					</div>
					<div class="col-md-3 myDesign">
						<select name="dobMonth" class="form-control">
							<option value="">Month</option>
							<option value="01"<?php if (!empty($dobMonth)&& $dobMonth == '01')  echo 'selected = "selected"';?>>01</option>
							<option value="02"<?php if (!empty($dobMonth)&& $dobMonth == '02')  echo 'selected = "selected"';?>>02</option>
							<option value="03"<?php if (!empty($dobMonth)&& $dobMonth == '03')  echo 'selected = "selected"';?>>03</option>
							<option value="04"<?php if (!empty($dobMonth)&& $dobMonth == '04')  echo 'selected = "selected"';?>>04</option>
							<option value="05"<?php if (!empty($dobMonth)&& $dobMonth == '05')  echo 'selected = "selected"';?>>05</option>
							<option value="06"<?php if (!empty($dobMonth)&& $dobMonth == '06')  echo 'selected = "selected"';?>>06</option>
							<option value="07"<?php if (!empty($dobMonth)&& $dobMonth == '07')  echo 'selected = "selected"';?>>07</option>
							<option value="08"<?php if (!empty($dobMonth)&& $dobMonth == '08')  echo 'selected = "selected"';?>>08</option>
							<option value="09"<?php if (!empty($dobMonth)&& $dobMonth == '09')  echo 'selected = "selected"';?>>09</option>
							<option value="10"<?php if (!empty($dobMonth)&& $dobMonth == '10')  echo 'selected = "selected"';?>>10</option>
							<option value="11"<?php if (!empty($dobMonth)&& $dobMonth == '11')  echo 'selected = "selected"';?>>11</option>
							<option value="12"<?php if (!empty($dobMonth)&& $dobMonth == '12')  echo 'selected = "selected"';?>>12</option>							
						</select>					
					</div>
					<div class="col-md-3 myDesign">
						<select name="dobYear" class="form-control">
							<option value="">Year</option>
							<option value="2000">2000</option>
							<option value="">1999</option>
							<option value="">03</option>
							<option value="">04</option>	
							<option value="">05</option>
							<option value="">06</option>
							<option value="">07</option>
							<option value="">08</option>
							<option value="">09</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
							<option value="">13</option>
							<option value="">14</option>
							<option value="">15</option>
							<option value="">16</option>
							<option value="">17</option>
							<option value="">18</option>
							<option value="">19</option>
							<option value="">20</option>
							<option value="">21</option>
							<option value="">22</option>
							<option value="">23</option>
							<option value="">24</option>
							<option value="">25</option>
							<option value="">26</option>
							<option value="">27</option>
							<option value="">28</option>
							<option value="">29</option>
							<option value="">30</option>
							<option value="">31</option>
						</select>					
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
						<input type="text" id="mob" name="mob" class="form-control" value="<?php if (!empty($mob)){echo $mob;}?>" required>
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
						<input type="password" id="dob" name="password" class="form-control" value="" required>
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
						<input type="password" id="dob" name="Conf_password" class="form-control" value="" required>
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
