<?php
session_start();
if(!isset($_SESSION['userdata'])){
//  header("location:home.html");
}

@$userdata = $_SESSION['userdata'];
@$groupsdata = $_SESSION['groupsdata'];

if($userdata['status']==0){
  $status = '<b style ="color: red;">not voted</b>';
}
else {
  $status = '<b style ="color: green;"> voted</b>';
}
 ?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>ONLINE VOTING SYSTEM- DASHBOARD</title>
    <style media="screen">
      body{background-color: powderblue; }
    </style>
  </head>
  <body>
    <style media="screen">


      #backbtn{
        padding: 5px;
        font-size: 15px;
        color: white;
        border-radius: 5px;
        float: left;
        background-color: blue;
      }
      #logoutbtn{
        padding: 5px;
        font-size: 15px;
        color: white;
        border-radius: 5px;
        float: right;
        background-color: blue;
      }
      #profile{background-color: white;
               width:30%;
                padding: 20px;
                float: left;
      }

      #Group{background-color: white;
               width:60%;
                padding: 20px;
                float: right;
      }
      #votebtn{
        padding: 5px;
        font-size: 15px;
        color: white;
        border-radius: 5px;
        background-color: blue;

      }
      #voted{
        padding: 5px;
        font-size: 15px;
        color: white;
        border-radius: 5px;
        background-color: green;

      }

   #mainpanel{
     padding: 10px;
   }
    </style>

    
    <div id="mainsection">

    <center>
    <button id="backbtn" >Back</button>
    <button id="logoutbtn" >Logout</button>
    <h1>ONLINE VOTING SYSTEM</h1>
    <hr>
  </center>

  <div id ="mainpanel">

  <div id="profile">
  <center> <img src="../uploads/<?php echo $userdata['photo']; ?>" height ="100" width="100"></center>
  <br> <b>Name:</b><?php echo $userdata['name'] ?>  <br> <br>
       <b>Mobile:</b> <?php echo $userdata['mobile'] ?> <br><br>
       <b>Address:</b><?php echo $userdata['address'] ?><br><br>
       <b>Status:</b> <?php echo $status ?><br>


  </div>
  <div id="Group">
    <?php

if(@$_SESSION['groupsdata']){
for($i=0; $i<count($groupsdata) ; $i++) {
  ?>
  <div>

    <img style="float: right;" src="../uploads/<?php echo $groupsdata[$i]['photo']  ?>" height="100" width="100" >
  <b>Group Name:</b> <?php echo $groupsdata[$i]['name'] ?><br><br>
<b>Votes:</b> <?php echo $groupsdata[$i]['votes'] ?>
<form action ="../api/vote.php" method="post">
<input type ="hidden" name ="gvotes" values ="<?php echo $groupsdata[$i]['votes'] ?>">
<input type ="hidden" name ="gid" values ="<?php echo $groupsdata[$i]['id'] ?>">
<?php
if($_SESSION['userdata']['status']==0){
?>
<input type="submit" name="votebtn" value="vote" id ="votebtn">
<?php
}
else {
  ?>
  <button disabled type="button" name="votebtn" value="voted" id ="voted"></button>
<?php
}
 ?>
</form>

</div>
<hr>
  </div>
</div>
  <hr>
  <?php
}
}else {

}

 ?></div>

  </body>
</html>
