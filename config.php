<?php 
$con=new mysqli("localhost","root","","sparksbank-db");
if($con->connect_error)
{
	echo "Database Connection Failed";
}
?>