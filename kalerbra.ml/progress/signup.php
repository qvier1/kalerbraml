<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- multistep form -->
	<form id="msform">
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Account Setup</li>
			<li>Social Profiles</li>
			<li>Personal Details</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Create your account</h2>
			<h3 class="fs-subtitle">This is step 1</h3>
			<input type="text" name="email" placeholder="Email" />
			<input type="password" name="pass" placeholder="Password" />
			<input type="password" name="cpass" placeholder="Confirm Password" />
			<input type="text" name="ID" placeholder="Your student ID" />
			<input type="button" name="next" class="next action-button" value="Next" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">Profiles</h2>
			<h3 class="fs-subtitle">Your presence on any education institute</h3>
			<input type="text" name="mamakao" placeholder="Name of your institute" />
			<input type="text" name="facebook" placeholder="Faculty" />
			<input type="text" name="gplus" placeholder="Study Program" />
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">Personal Details</h2>
			<h3 class="fs-subtitle">We will never sell it</h3>
			<input type="text" name="fname" placeholder="First Name" />
			<input type="text" name="lname" placeholder="Last Name" />
			<input type="text" name="phone" placeholder="Phone" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<a type="button" name="next" href="../login.html" class="next action-button">Submit</a>
		</fieldset>
	</form>
	
<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>