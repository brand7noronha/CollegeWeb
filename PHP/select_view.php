<?php 

require("open_conn.php");

$sql="select * from student;";
$result=$conn->query($sql);
if($result->num_rows >0){
	//output the data of each row
	echo "<table border='1'>";
	echo "<tr><th>id</th><td>firstname</td><td>lastname</td><td>age</td>";
	
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['age']."</td></tr>";
	}
	echo "</table>";
}else{
	echo "0 results";
}
require("close_conn.php");
?>