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
	<a href="admindash.php" class="btn btn-success float-left" >Back</a>
	<br><br>
	<h1 class="text-justify font-weight-bold text-center">Add Student Details</h1>
	<br><br>
	<form action="add_student.php" method="post" enctype="multipart/form-data" class="bg-light" style="margin-left: 350px;">
		<table class="table-hover table-bordered w-75 h-100">
			<tr><th>Roll No</th><td><input type="text" name="roll" placeholder="Enter Roll No" required="required" autocomplete="off"></td></tr>
			<tr><th>Full Name</th><td><input type="text" name="name" placeholder="Enter Student's Name" required="required" autocomplete="off"></td></tr>
			<tr><th>City</th><td><input type="text" name="city" placeholder="Enter City Name" required="required" autocomplete="off"></td></tr>
			<tr><th>Parent's Contact No</th><td><input type="text" name="contact" placeholder="Enter Parents contact no" required="required" autocomplete="off"></td></tr>
			<tr><th>Standard</th><td><input type="number" name="standard" placeholder="Enter Standard" required="required" autocomplete="off"></td></tr>
			<tr><th>Image</th><td><input type="file" name="image" placeholder="Select Image" required="required" autocomplete="off"></td></tr>
			<tr><td colspan="2"><input type="submit" name="submit" value="submit" class="btn btn-success btn-sm"></td></tr>
		</table>
	</form>
</div>
<?php
if(isset($_POST['submit'])){
	include('../database/dbcon.php');
	

	$roll=$_POST['roll'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$contact=$_POST['contact'];
	$standard=$_POST['standard'];
	$file=$_FILES['image'];

	$filename=$file['name'];
	$temp=$file['tmp_name'];
	$fileerror=$file['error'];
	if($fileerror==0){
		$destfile='../dataimg/'.$filename;
		move_uploaded_file($temp,$destfile);
	}
	

	$qry="INSERT INTO `student_details`(`roll`, `name`, `city`, `contact`, `standard`, `image`) VALUES ('$roll','$name','$city','$contact','$standard','$destfile')";
	global $con;
	$run=mysqli_query($con,$qry);

	// $row=mysqli_num_rows($run);
	
	if($run==true){
?>
<script>
	alert('data inserted successfully!');
</script>
<?php
}else{
?>
<script>
	alert('data inserted Failed!');
</script>
<?php
}
}
?>