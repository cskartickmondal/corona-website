<?php  
if(isset($_POST['submit'])){
$con=mysqli_connect('localhost','root','','student_management_system');
// if($con){
// 	echo 'connection';
// }else{
// 	echo('failed');
// }

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$coronasym=$_POST['coronasym'];
$comment=$_POST['comment'];

$syms="";
foreach ($coronasym as $syms2) {
	$syms.=$syms2.",";
}

$qry="insert into corona_info(`name`, `email`, `phone`, `coronasym`, `comment`)values('$name','$email','$phone','$syms','$comment');";
global $con;
$run=mysqli_query($con,$qry);
if($run==true){
	?>
	<script>
		alert('Sent  successfully!');
		window.open('index.php','_self');
	</script>
	<?php
}else{
	?>
	<script>
		alert('Failed sent!');
		window.open('index.php','_self');
	</script>
	<?php

}
}
?>