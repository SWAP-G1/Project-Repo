<html>
<body>  
<?php
$con = mysqli_connect("localhost","root","","xyz polytechnic"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

// Prepare the statement 
$stmt= $con->prepare("DELETE FROM class WHERE class_code=?");


$del_classcode = htmlspecialchars($_GET["class_code"]);


$stmt->bind_param('s', $del_classcode); //bind the parameters
if ($stmt->execute()){
 echo "Delete Query executed.";
 header("location:class_record.php");

}else{
  echo "Error executing DELETE query.";
}
?>
</body>
</html>