<?php
	$con=new mysqli('localhost','root','','foundation');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

	$sql="DELETE from book where B_id=".$_GET['id'].";";

	if($con->query($sql))
	{
		echo "<script> alert('Deleted Successfully'); </script>";
		 echo "<script>window.open('lib_check_book.php?mes=record deleted','_self')</script>";
	}
	else
	{
		echo "<script>window.open('lib_check_book.php','_self')</script>";
	}
?>