<?php 

require("open_conn.php");

$id=$_GET['id'];
$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$age=$_GET['age'];

//sql to delete a record
$sql="update student set firstname='$fname', lastname='$lname', age=$age where id=$id;";

if($conn->query($sql)==TRUE){
	echo "Record updated successfully";
	include("update_form.php");
}else{
	echo "Error updating record: ".$conn->error;
}
require("close_conn.php");
?>