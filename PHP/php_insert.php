<?php 

require("open_conn.php");

$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$age=$_GET['age'];

//sql to delete a record
$sql="insert into student (firstname,lastname,age) values ('$fname','$lname',$age);";

if($conn->query($sql)==TRUE){
	echo "Record inserted successfully";
	include("insert_form.php");
}else{
	echo "Error inserting record: ".$conn->error;
}
require("close_conn.php");
?>