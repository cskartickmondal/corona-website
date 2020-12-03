<?php
include('../database/dbcon.php');
$kid=$_REQUEST['kid'];
$qry="delete from student_details where roll='$kid';";
global $con;
$run=mysqli_query($con,$qry);
if($run==true){
?>
<script>
	alert('Delete Successfully!');
	// header('location:delete_student.php');
	window.open('delete_student.php?kid=<?php echo($kid); ?>','_self');

</script>
<?php
}
else{
?>
<script>
alert('Delete Failed!');
// header('location:delete_student.php');
window.open('delete_student.php?kid=<?php echo($kid); ?>','_self');
</script>
<?php
}
?>