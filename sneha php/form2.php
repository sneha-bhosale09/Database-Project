<html>
<head><title>my first form in php</title>
</head>
<body>
<form name="f1">
Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
GENDER:
<input type="radio" name="gender"
<?php if(isset($gender)&& $gender=="female") echo "checked";?>
value="female">female
<input type="radio" name="gender"
<?php if(isset($gender)&& $gender=="male") echo "checked";?>
value="male">male
<input type="radio" name="gender"
<?php if(isset($gender)&& $gender=="others") echo "checked";?>
value="others">others
<body>
</html>



</form>