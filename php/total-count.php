<?php 

include "config.php";

$sql="SELECT * FROM student";
$run_sql=mysqli_query($conn,$sql);
$result=mysqli_num_rows($run_sql);
echo $result;

?>