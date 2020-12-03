<?php
if(isset($_POST['submit'])){
	include('../database/dbcon.php');
	$kid=$_REQUEST['kid'];
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
	$qry="update student_details set roll='$roll',name='$name',city='$city',contact='$contact',standard='$standard',image='$destfile' where roll='$kid';";
	global $con;
	$run=mysqli_query($con,$qry);
	if($run==true){
?>
<script>
	alert('data Update successfully!');
	// header('location:update_form.php?kid=$kid');
window.open('update_form.php?kid=<?php echo($kid); ?>','_self');
</script>
<?php
}else{
?>
<script>
	alert('data inserted Failed!');
	// header('location:update_form.php?kid=$kid');
window.open('update_form.php?kid=<?php echo($kid); ?>','_self');
</script>
<?php
}
}
?>