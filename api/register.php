<?php

include("connect.php");
@$name = $_POST['name'];
@$mobile = $_POST['mobile'];
@$password = $_POST['password'];
@$cpassword = $_POST['cpassword'];
@$address = $_POST['address'];
@$image = $_FILES['photo']['name'];
@$tmp_name = $_FILES['photo']['tmp_name'];
@$role = $_POST{'role'};

if($cpassword != $password)
{
  echo'<script>

alert("password do not match");
window.location = "register.php";
</script>';

}

else{move_upload_file($tmp_name,"C:\wamp\www\uploads\");
$insert = mysqli_query($connect, "insert into table user('name', 'moblie', 'password', 'address', 'photo', 'status', 'votes', 'role') values('$name', '$mobil\e' '$password', '$address', '$image',0,0 ,'$role')");
if($insert)
{
echo '<script>
alert("registration successfull");
window.location = "home.html";
</script>';
}
}
 ?>
