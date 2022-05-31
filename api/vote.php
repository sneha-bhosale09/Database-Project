<?php
session_start();
include('connect.php');

$votes = $_POST['gvotes'];
$total_votes = $votes+1;
$gid = $_POST['gid'];
$uid =$_SESSION['userdata']['id'];

$update_votes = mysqli_query($connect, "update user set votes='$total_votes' where id='$gid'");
   $update_status = mysqli_query($connect, "update user set status=1 where id='$uid'");

   if($update_status and $update_votes){
       $getGroups = mysqli_query($connect, "SELECT name, photo, votes, id FROM user WHERE role=2 ");
       $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
       $_SESSION['groups'] = $groups;
       $_SESSION['status'] = 1;
       echo '<script>
                   alert("Voting successfull!");
                   window.location = "../routes/dashboard.php";
               </script>';
   }
   else{
       echo '<script>
                   alert("Voting failed!.. Try again.");
                   window.location = "../routes/dashboard.php";
               </script>';
   }



 ?>
