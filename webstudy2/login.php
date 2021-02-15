<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		li {
			display: inline;
		}
		body{
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			height: 100vh;
		}
		.login-panel {
			position: fixed;
			top: 50%;
			left: 47%;
			margin-top: -300px; 
			margin-left: -135px; 
			background-color: #000; 
			border-radius: 3px; 
			padding: 15px; 
			width: 420px; 
			height: 460px; 
			box-shadow: 7px 7px 16px 0px rgba(50, 50, 50, 0.67);
			opacity: 0.85;
			filter: alpha(opacity=85); /* For IE8 and earlier */
		}

		.myButton {
			background-color:#1473e6;
			border-radius:28px;
			border:1px solid ##1473e6;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-size:17px;
			padding:2px 31px;
			text-decoration:none;
		}
		.myButton:hover {
			background-color:#1473e6;
		}
		.myButton:active {
			position:relative;
			top:1px;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: white;
			font-size: 16px;
		}
		li {
			font-size: 16px;
			float: left;
		}
		li a {
			font-size: 16px;
			display: block;
			color: #c5c5c5;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		li a:hover:not(.active) {
			background-color: white;
		}
	</style>

</head>
<body>
	<!-- <div>

		<form  action="check_login.php" method="post">
			<h1>เข้าสู่ระบบ</h1>
			<input type="text" name="user" required>
			<input type="password" name="password" required>
			<input type="submit" name="submit" value="เข้าสู่ระบบ">
			<a href="index.php">กลับ</a>
		</form>
	</div> -->
	<div style="background: -webkit-linear-gradient(#C9F5F5,#32B4C1); width: 100%; height: 100%;" >
		<div class="container"  align="center"  style="padding-top: 10%; ">
			<b style="font-size: 50px;">เข้าสู่ระบบ</b>
			<br>
			<br>
			<br>
			<form action="check_login.php" method="post">
				<input style="height: 40px; border-radius:50px; width: 30%; padding-left:30px;" required name="user" id="user" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="Username" autofocus>
				<br>
				<input style="height: 40px; border-radius:50px; width: 30%; padding-left:30px;" required name="password" id="password" type="password"class="form-control form-control-sm" autocomplete="false" placeholder="Password" >


				<div style="padding-top:15px;     text-align: center;" align="right" >
					<button type="button" class="myButton" style="cursor: pointer;"  onclick="backpage()">กลับ</button>
					<button type="submit" class="myButton" style="cursor: pointer;" >เข้าสู่ระบบ</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function backpage(argument) {
		window.location ="index.php";
	}
</script>