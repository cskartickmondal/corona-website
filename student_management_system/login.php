<!-- <?php 
session_start();
if(isset($_SESSION['session_id'])){
	header('location:admin/admindash.php');
}
 ?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin page here</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<?php include 'header.php'; ?>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container ">
		<br><a href="index.php" class="btn btn-success float-left" >Back</a><br>
	<h1 class="text-primary font-weight-bold text-center" >Admin Login</h1></div><br><br><br>

	<form action="login.php" method="post" style="margin-left: 550px;">
		<table class="table-striped table-success table-hover table-bordered" align="center">
			<tr><td class="font-weight-bold">Username</td><td><input type="text" name="uname" autocomplete="off"></td></tr>

			<tr><td class="font-weight-bold">Password</td><td><input type="password" name="password" autocomplete="off"></td></tr>
			<tr><td colspan="2" align="center"><input type="submit" name="login" value="login" class="btn-secondary btn-sm"></td></tr>
		</table>
	</form>

	</div>


</body>
</html>
<?php 
include('database/dbcon.php');

if(isset($_POST['login'])){
	$uname=$_POST['uname'];
	$password=$_POST['password'];

	$qry="SELECT * FROM `admin` WHERE `username`='$uname'AND`password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);

	if($row<1){
		?>
		<script>
			alert('!!! username or password wrong');
			window.open('login.php','_self');
		</script>
		<?php
		 }
		else{
			$data=mysqli_fetch_assoc($run);
			// $id=$data['id'];
			// echo $id;
			session_start();
			$_SESSION['session_id']=$data['id'];
			header('location:admin/admindash.php');
		}
}
 ?>
