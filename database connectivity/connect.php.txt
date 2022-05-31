<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$number=$_POST['number'];

$conn= new mysqli('localhost','root','','test');
if($conn->connect_error)
{die('connection failed :', .$conn->connect_error);
}else{
$stmt =$conn->prepare("insert into registration(fname, lname, number) value(?,?,?)");
$stmt->bind_param("ssi",$fname, $lname, $number);
$stmt->execute();
echo"registration successfully....";
$stmt->close();
$conn->close();
}

?>
