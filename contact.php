<?php
$servername="localhost";
$username="root";
$password="ranjeet";

if (isset($_POST['name'])&& isset($_POST['email'])&&isset($_POST['comment']) ) {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	if(empty($name)&&empty($email)&&empty($comment))
	{

	}
	else
	{
		$conn=mysql_connect($servername,$username,$password);
		if (!$conn) {
			die("connect failed");
		}

		$sql="INSERT INTO cont(name,email,comment) VALUES('".$name."','".$email."','".$comment."')";
		mysql_select_db('comp');  	
		$retval=mysql_query($sql);
		if ( $retval) {
			echo "<center><h1>thanks for registering</h1></center>";	
		}
		else
		{
			echo "<center><h1>Error</h1></center>";	
		}

		mysql_close($conn);
	}
}
?>