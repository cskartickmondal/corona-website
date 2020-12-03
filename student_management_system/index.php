<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>student management system</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<?php include 'header.php'; ?>
	<link rel="stylesheet" href="css/style.css">
	<script src="jquery/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="container"><br><br>
	<h1 class="text-success text-uppercase text-center">Welcome to Student management System</h1><br><br><br><br>
	

	<!-- <div style="height: 200px; width: 100%;">
	<marquee behavior="alternate" direction="left">
	<button class="btn btn-secondary "   id="b1" onclick="window.location='registration.php'">Registration here</button></marquee><br><br><br> -->
	
	<marquee behavior="alternate" direction="right">
		<h1 class="text-muted" style="">Hi Guys! Welcome to our school site</h1>
	</marquee>
	</div><br><br><br>

	<div>
		
	<button class="btn btn-secondary " style="margin-left: 610px; "id="b2" onclick="window.location='login.php'">Admin login </button>
	
	</div>
	</div>
</body>
</html>
<!-- <script>
$(document).ready(function() {
	$('#b1').mouseenter(function() {
		$(this).css({
			'transform':'scale(2,2)',
			'transition':'0.5s ease'
		});
	});
	$('#b1').mouseout(function() {
		$(this).css({
			'transform':'scale(1,1)',
			'transition':'0.5s ease'
		});
	});
});		
</script> -->

<script>
$(document).ready(function() {
	$('#b2').mouseenter(function() {
		$(this).css({
			'transform':'scale(2,2)',
			'transition':'0.5s ease'
		});
	});
	$('#b2').mouseout(function() {
		$(this).css({
			'transform':'scale(1,1)',
			'transition':'0.5s ease'
		});
	});
});		
</script>