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
<?php 
include('../database/dbcon.php'); 
$kid=$_REQUEST['kid'];
$qry="select * from student_details where roll='$kid';";
global $con;
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
?>

<link rel="stylesheet" href="../bootstrap/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<div class="container"><br>
	<a href="../logout.php" class="btn btn-success float-right" >Logout</a>
	<a href="admindash.php" class="btn btn-success float-left" >Back</a>
	<br><br>
		<h1 class="text-justify font-weight-bold text-center">Update Student Details Form</h1>
	<br><br>
	<form action="update_data.php?kid=<?php echo $data['roll'];?>" method="post" enctype="multipart/form-data" class="bg-light" style="margin-left: 200px;">
		<table class="table-hover table-bordered w-100 h-100">
			<tr><th>Roll No</th><td><input type="text" name="roll" placeholder="<?php echo $data['roll']; ?>" required="required" autocomplete="off"></td></tr>

			<tr><th>Full Name</th><td><input type="text" name="name" placeholder="<?php echo $data['name']; ?>" required="required" autocomplete="off"></td></tr>

			<tr><th>City</th><td><input type="text" name="city" placeholder="<?php echo $data['city']; ?>" required="required" autocomplete="off"></td></tr>

			<tr><th>Parent's Contact No</th><td><input type="text" name="contact" placeholder="<?php echo $data['contact']; ?>" required="required" autocomplete="off"></td></tr>

			<tr><th>Standard</th><td><input type="number" name="standard" placeholder="<?php echo $data['standard']; ?>" required="required" autocomplete="off"></td></tr>

			<tr><th>Image</th><td><input type="file" name="image" placeholder=""  required="required" autocomplete="off"><?php echo $data['image']; ?> <img src="<?php echo $data['image']; ?>" alt="" width="100" height="100"></td></tr>

		

			<tr><td colspan="2"><input type="submit" name="submit" value="submit" class="btn btn-success btn-sm"></td></tr>
		</table>
	</form>
	
</div>
