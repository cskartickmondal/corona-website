<?php 
session_start();
if(isset($_SESSION['session_id'])){
// echo $_SESSION['session_id'];
}
else{
header('location:../login.php');
}
?>
<?php include('../header/header.php'); ?>
<link rel="stylesheet" href="../bootstrap/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<div class="container"><br>
	<a href="../logout.php" class="btn btn-success float-right" >Logout</a>
	<a href="../logout.php" class="btn btn-success float-left" >Back</a>
	<marquee behavior="alternate" direction="right"><br><br>
		<h1 class="text-justify font-weight-bold">Welcome to Admindash Board</h1>
	</marquee><br><br><br>
	
	<table class="table-success table-bordered table-hover w-50 h-100" style="margin-left: 230px;">
		<tr><td>1.</td><td style="text-decoration: none;"><a href="add_student.php">Insert Students Details</a></td></tr>

		<tr><td>2.</td><td style="text-decoration: none;"><a href="update_student.php">Update Students Details</a></td></tr>

		<tr><td>3.</td><td style="text-decoration: none;"><a href="delete_student.php">Delete Students Details</a></td></tr>
	</table>

	
</div>

