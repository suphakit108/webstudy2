<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<!-- Bootstrap Core CSS -->
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- <title>ADMIN PANEL LOGIN</title> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="icon" href="images/logo.jpg" type="image/png">
	<script>
			// $(document).ready(function(){

		// window.location = "pages/index.php?app=user"
			// });
		// });
		$( document ).ready(function() {
			window.location = "pages/index.php?app=user";
		});
		function gogo(){
			window.location = "pages/index.php?app=user";
		}
		function error(){
			alert("Can not login. Please check your username and password.");
			document.getElementById("error").innerHTML = "username and password.";
		}
	</script>
</head>
<style type="text/css">
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: white;
	}
	li {
		float: left;
	}
	li a {
		display: block;
		color: #c5c5c5;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover:not(.active) {
		background-color: white;
	}
	.active {
		background-color: white;
	}
	.myButton {
		background-color:#1473e6;
		border-radius:28px;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:17px;
		padding:16px 31px;
		text-decoration:none;
	}
	.myButton:hover {
		background-color:#1473e6;
	}
	/* .myButton:active {
	position:relative;
	top:1px;
	} */
</style>
<!-- <body>
	<ul style=" border-bottom: 2px solid #c5c5c5;">
		
			<li style="float:right"><a class="active" href="#about">เข้าสู่ระบบ</a></li>
		</ul>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="container" style="padding-left: 150px;">
			<div class="row" style=" border-left: 5px solid #1473e6;     padding-top: 60px; padding-bottom: 60px;">
				<div class="row">
					<div class="col-sm-12">
						<h4 style="padding-top: 0px;padding-left: 50px;color: #1473e6;">วิเคราะห์ความเป็นไปได้ในการ</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h1 style="padding-left: 100px;font-size: 70px; color: #6d6d6d;margin-top: 0px;margin-bottom: 0px;">ขยายกิจการ</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h1 style="font-size: 70px; padding-left: 250px;color: #6d6d6d;margin-top: 0px;margin-bottom: 0px;">ง่ายๆด้วยตัวคุณ</h1>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<button class="myButton" style="padding-top: 5px;padding-bottom: 5px;padding-left: 50px;padding-right: 50px;margin-left: 270px; font-size: 35px;" onclick="gogo()"> เริ่มต้น</button>
				</div>
			</div>
		</div>
	</body> -->
	</html>