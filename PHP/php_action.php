<?php 

require("open_conn.php");

$id=$_GET['id'];
//sql to delete a record
$sql="delete from student where id=$id;";

if($conn->query($sql)==TRUE){
	echo "Record deleted successfully";
	include("delete_form.php");
}else{
	echo "Error deleting record: ".$conn->error;
}
require("close_conn.php");
?>