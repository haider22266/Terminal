<?php
    include 'config.php';
	$email=$_GET['email'];
	//echo $_GET['email'];
	$query="select*from users where email=$email";
    $query_check=mysqli_query($con,$query);
	$user=mysqli_fetch_assoc($query_check);
	
	
?>
<html>
	<head>
		<title>/\Mahbuba Travels</title>
		<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
		<style>
		@keyframes ticker {
	0%   {margin-top: 0}
	25%  {margin-top: -30px}
	50%  {margin-top: -60px}
	75%  {margin-top: -90px}
	100% {margin-top: 0}
}


	
			
			.mainmenu{overflow:hidden;}
			.mainmenu ul{margin:0;padding:0;list-style:none;margin-top:20px}
			.mainmenu ul li{float:left;font-size:15px;}
			.mainmenu ul li a{display:block;color:#000;padding:10px 10.5px; text-decoration:none}
			.mainmenu ul li a:hover{background:#fff;color:red}
			
			.footer a{
				text-decoration:none;
				color:white;
			}
			.footer a:hover{background:#fff;
				color:red;
				text-decoration:none;
				padding:15px;
			}
			.footertwo{
				
				color:white;
				background-color:black;
			}
		
			
			.mySlides {display:none; z-index:-1000; position: absolute;float:left }
			.c{background-image:url("image/abstract-blue-vintage-pattern-wallpaper-pictures-free-1920x1080.jpg")}
			.c12{float:right;margin-top:0px;width:100%}
			.logout a{
				margin:20px;
				font-size:25px;
				color:red;
				text-decoration:none;
				float:right;
				margin-right:100px;
				margin-bottom:0px;
			}
			.row h2{
			font-size:50px;
			color:blue;
			}
		
			
			.index_three_notice_hole{background-image:url("image/light-colored-backgrounds-for-websites-we-provided-you-with-10-colors-background-for-website-in-light-color.jpg");font-family:'Abel';overflow:hidden}
			.index_three_notice{float:left}
			.index_three_notice a{ text-decoration:none;color:red}
			.index_three_notice a:hover{ text-decoration:none;color:#16a085}
			.index_three_notice img{width:300px;height:300px;margin-top:30px;border-radius:10px}
			
			
				
			.index_one_apply{font-family:'Abel';text-align:center;margin:0px;padding:0px}
			.index_one_apply{background-image:url("image/1.jpg");line-height:150px;text-decoration:none}
			.index_one_apply h1 a{line-height:100px;text-decoration:none;font-size:50px;color:#5d6d7e;margin-top:-20px}
			<!.button{display:inline-block;border-radius:4px;background-color:#f4511e;border:none;padding:20px;margin:5px;font-size:28px}>

			
		
		</style>
		
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
			<link rel="stylesheet" type="text/css" href="css/custom.css"/>
		
		
	</head>
	<body>
	
		<div class="container">
			<div class="row logout">
					
					<div class="span12" >
						<a href="index.html" style="font-family:'Abel' " ><b>LogOut</b></a>
					</div>
					
			</div>
			<div class="row">
					<div class="span6" >
						<h2 style="font-family:'Abel' " >/\Mahbuba Travels</h2>
						<p>Transportation Services Provider</p>
					</div>
				
				<div class="span6" style="margin:10px" >
					<div class="mainmenu">
						<ul>
							<li><a href="" style="color:Red ">Launch Terminal</a></li>
							<li><a href="http://localhost/Transport/launchticket.php?email='<?php echo $user['email']?>'">Purchase-Ticket</a></li>
							<li><a href="http://localhost/Transport/change-password.php?email='<?php echo $user['email']?>'">Change-Password</a></li>
							<li><a href="profile.php?email='<?php echo $user['email']?>'">Profile</a></li>
							<li><a href="">Contact</a></li>
							
						</ul>
					</div>
				</div>
			</div>	
			<br>
			
			<div class="row index_three_notice_hole">
				<div class="span4 index_three_notice">
					<center><h1><a href="">Travel Launch</a></h1>
					<a href="tution.html"><img src="img/launch1.jpg"/></a>
					</center>
				</div>
				<div class="span4 index_three_notice">
					<center><h1><a href="">Tourist Launch</a></h1>
					<a href="admission.html"><img src="img/launch2.jpg"/></a>
					</center>
				</div>
				<div class="span4 index_three_notice">
					<center>
					<h1><a href="">Regular Launch</a></h1>
					<a href=""><img src="img/launch3.jpg"/></a><br>
					</center>
				</div>
				
			</div>
			<div class="row index_one_apply">
				<div class="span12">
					<center><h1><a href="#">Emergency Launch</a></h1></center>
				</div>
			</div>
			<div class="row footer" style="text-align:center;color:white;background-image: url(img/wallpaper-2562466.jpg);text-decoration:none">
				<div class="span4">
					<h3>Menu</h3>
					<p><a href="#">Automation Login</a></p>
					<p><a href=""> calender</a></p>
					<p><a href="">Members</a></p>
					<p><a href="">Schedule</a></p>
				</div>
				<div class="span3">
					<h3>Other</h3>
					<p><a href="">Alumni</a></p>
					<p><a href="">Vacancies</a></p>
					<p><a href="">Advertisement</a></p>
					<p><a href="">Resources</a></p>
				</div>
				<div class="span4">
					 <h3>Contact</h3>
					 <p>74/A, Green Road, Farmgate, Dhaka - 1215,</p> 
					 <p>Bangladesh PABX:+8802-58157091-4,6 FAX:+8802-58157097</p>
				</div>
			</div>
			<div class="row footertwo">
				<div class="span12">
					<p>Mahbuba Travels System Engineer</p> 
					 <p>Bangladesh PABX:+8802-58157091-4,6 FAX:+8802-58157097</p>
				</div>
			</div>
			
		</div>
	
				
		
	</body>
</html>