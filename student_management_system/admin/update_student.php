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
	<h1 class="text-justify font-weight-bold text-center">Update Student Details</h1>
	<br><br>
	<form action="update_student.php" method="post" enctype="multipart/form-data" class="" style="margin-left: 330px;">
		<table class="table-hover table-bordered w-75 h-100 bg-light">
			<tr><th>Standard</th><td><input type="number" name="standard" placeholder="Enter Student's Standard" required="required" autocomplete="off"></td></tr>
			<tr><th>Student's Name</th><td><input type="text" name="name" placeholder="Enter Student's Name" required="required" autocomplete="off"></td></tr>
			<tr><td colspan="2"><input type="submit" name="submit" value="submit" class="btn-success btn"></td></tr>
		</table>
	</form><br><br>
	<table class="table-bordered table-hover bg-light" style="margin-left: 270px;">
		<tr class="text-success font-weight-bold  text-center"><th>No</th><th>Name</th><th>City</th><th>Parent's Contact No</th><th>Roll No</th><th>Standard</th><th>Image</th><th>Edit</th></tr>
		
		<?php
		if(isset($_POST['submit'])){
			include('../database/dbcon.php');
			$standard=$_POST['standard'];
			$name=$_POST['name'];
			$qry="select * from student_details where standard='$standard' and name like '%$name%'";
			$run=mysqli_query($con,$qry);
			$row=mysqli_num_rows($run);
			// $data=mysqli_fetch_assoc($run);
			if($row<1){
		?>
		<tr><td colspan="7">No Records Found!</td></tr>
		<?php
		}
		else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)){
			$count++;
		?>
		<tr align="center">
			<td><?php echo $count ; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['city']; ?></td>
			<td><?php echo $data['contact']; ?></td>
			<td><?php echo $data['roll']; ?></td>
			<td><?php echo $data['standard']; ?></td>
			<td><?php echo $data['image'];?><img src="<?php echo $data['image'];?>" width="100" height="100"></td>
			<td><a href="update_form.php?kid=<?php echo $data['roll'];?>">edit</a></td>
		</tr>
		<?php
		}
		}
		}
		?>
	</table>
</div>