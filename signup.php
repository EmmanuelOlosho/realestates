<!DOCTYPE html>
<html>
<head>
	<title>Home - QuickAgent</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/qa1.jpg" >
	<meta  name="theme-color" content="#0b7199"> 
</head>
<body class="noselect ">
	<div class="mobile-nav-modal hidden-ls fade-in" id="m-modal"></div>
<!-- LARGE SCREEN -->
<div class="col-10 off-1 hidden-xs">
	<nav class=" down-1">
		<div class="qa-logo"><span class="color-code-1 bold"><i class="fas fa-home"></i> QuickAgent</span></div>
		<a href="index.php">Home</a>
		<a href="Home">Properties</a>
		<a href="Home">About Us  <i class="fas fa-caret-down"></i></a>
		<a href="login.php" class="active_page">Login</a>
		<a href=""><i class="fas fa-search"></i></a>
		<span><a href="Home" class="qa-focus">Sell</a></span>
	</nav>
</div>
 <div class="mother bottom-50 hidden-xs" >
 	<div class="sign-up-container bottom-50 down-5">
 		<div class="col-4 bg-color-code-1 centered" style="height: 430px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
 			<div class="container down-5">
 				<div class="mother down-30"><span class="white px30">QuickAgent<sup><i class="fas fa-circle px9"></i></sup></span></div>
 				<div id="sign_up_advert">
 					<div class="mother down-10"><span class="px13 white">More than 5000 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 					quis nostrud exercitation ullamco laboris nisi ut </span></div>
 					<div class="mother down-5"><span class="white px13">Olosho Ayomide...</span></div>
 				</div>
 				<div id="sign_up_advert" hidden>
 					<div class="mother down-10"><span class="px13 white">More than 5000 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 					quis nostrud exercitation ullamco laboris nisi ut </span></div>
 					<div class="mother down-5"><span class="white px13">Olosho Ayomide...</span></div>
 				</div>
 				<div id="sign_up_advert" hidden>
 					<div class="mother down-10"><span class="px13 white">More than 5000 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 					quis nostrud exercitation ullamco laboris nisi ut </span></div>
 					<div class="mother down-5"><span class="white px13">Olosho Ayomide...</span></div>
 				</div>
 			</div>
 		</div>
 		<div class="col-8">
 			<div class="col-8 off-2 down-5">
 				<div class="down-5"><span class="color-code-2 px30">Create Account</span></div>
 				<div><span class="faded px13">Signed up Already ?<a href="login.php" class="color-code-2 bold"> Log in</a></span></div>
 				<!-- <div class="col-3 down-6 user_status">
 					<div class="col-6 status" id="tn">
 						<div class="container"><span class="px13 faded"><i class="fas fa-user"></i> renter</span></div>
 					</div> 
 					<div class="col-6 status" id="ag">
 						<div class="container"><span class="px13 faded"><i class="fas fa-user"></i> agent</span></div>
 					</div>
 					<div class="col-6 status_slider bg-color-code-1" id="sl">
 						<div class="container"><span class="px13" id="tntx"><i class="fas fa-user"></i> renter</span></div>
 					</div>
 				</div> -->
 				<div class="mother down-4">
 					<form method="POST" action="helper.php" autocomplete="off">
 						<input hidden="	" id="agent" type="radio" name="status" value="agent">
 						<input hidden="	" id="tenant" type="radio" name="status" value="tenant">
 						<div class="mother down-1"><span class="px13">Email</span></div>
 						<div class="mother down-1 email-input-container">
 							<div class="container">
 								<label><i class="fas fa-envelope px13 color-code-2"></i></label>
 							<input type="email" name="user_email" placeholder="johndoe@example.com"> 
 						</div>
 					</div>
 						<div class="mother down-2"><span class="px13">Password</span></div>
 						<div class="mother email-input-container">
 							<div class="container">
 								<label><i class="fas fa-key px13 color-code-2"></i></label>
 							<input type="password" name="user_password" id="password" placeholder="*******************">
 							<a href="javascript:void(0)" onclick="showOnclick('password', 'show-password')"><i class="fas fa-eye" id="show-password"></i></a> 
 						</div>
 						</div>
 						<div class="mother down-2"><input type="checkbox" name="agree" required="	"><span class="faded px13">I agree to quick agent <a href="" class="color-code-2">terms and conditions</a></span></div>
 						<div class="down-1 mother"><span class="color-code-1 px13 bold"><?php 	echo ""; ?></span></div>
 						<div class="mother down-5"><button type="submit" name="sign_up" class="sign_up_btn">Sign Up</button></div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- mobile view -->
<div class="hidden-ls mother bottom-50">
		<div class="mobile-nav hidden-ls">
			<div class="xs-4"><div class="xs-10 xs-off-1"><span class="border-circle-mobile"><a href="index.php" class="color-code-2"><i class="fas fa-arrow-left"></i></a></span></div></div>
			<div class="xs-4 centered"><span class="color-code-2 bold"><i class="fas fa-home"></i> QuickAgent</span></div>
			<div class="xs-4 right">
				<div class="xs-10" id="m-bars"><span class="px15 color-code-2"><i class="fas fa-bars" id="nav-icon"></i></span></div>
			</div>
		</div>
		<div class="mobile-nav-open hidden-ls" id="m-nav">
			<div class="container">
				<a href="Home" class="active_page"><i class="fas fa-home"></i> Home</a>
				<a href="Home"><i class="fas fa-bicycle"></i> Properties <sup><span class="bg-color-code-2 white px13">New</span></sup></a>
				<a href="Home"><i class="fas fa-info"></i> About Us <i class="fas fa-caret-down"></i></a>
				<a href="login.php"><i class="fas fa-user"></i> Login</a>
				<a href=""><i class="fas fa-search"></i> Search</a>
			</div>
		</div>
	<div class="bg-landing-signup xs-down-20"></div>
	<div class="mother">
		<div class="xs-10 xs-off-1 xs-down-1">
			<div><span class="px25 bold color-code-2">Create Account</span></div>
			<div class="xs-top-1 xs-12"><span class="px13 faded">Signed up already?  <a href="login.php" class="color-code-2 bold">Log in</a></span></div>
			<div class="mother xs-down-3">
				<form method="POST" action="helper.php">
 						<input hidden="" id="m-agent" type="radio" name="status" value="agent">
 						<input hidden="" id="m-tenant" type="radio" name="status" value="tenant">
 						<div class="mother xs-down-3"><span class="px13">Email</span></div>
 						<div class="mother xs-down-3 email-input-container">
 							<div class="container">
 								<label><i class="fas fa-envelope px13 color-code-2"></i></label>
 							<input type="email" name="user_email" placeholder="johndoe@example.com"> 
 						</div>
 					</div>
 						<div class="mother xs-down-5"><span class="px13">Password</span></div>
 						<div class="mother email-input-container">
 							<div class="container">
 								<label><i class="fas fa-key px13 color-code-2"></i></label>
 							<input type="password" id="pass" name="user_password" placeholder="*******************">
 							<a href="javascript:void(0)" onclick="showOnclick('pass', 'show-p')"><i class="fas fa-eye" id="show-p"></i></a>
 						</div>
 						</div>
 						<div class="mother xs-down-3"><input type="checkbox" name="agree" required="	"><span class="faded px13">I agree to quick agent <a href="" class="color-code-2">terms and conditions</a></span></div>
 						<div class="xs-down-3 mother"><span class="color-code-1 bold"><?php 	echo ""; ?></span></div>
 						<div class="mother xs-down-3"><button type="submit" name="sign_up" class="sign_up_btn">Sign Up</button></div>
 					</form>
			</div>
		</div>
	</div>
</div>
</body>
<script src="js/script.js"></script>
</html>