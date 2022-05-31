<html>
<head>
<title>single line input control</title>
</head>
<body>
<form name='f1'>
first name <input type="text" name='fname'>
<br><br>
last name <input type="text" name='lname'>
feedback:<br>
<textarea name="fb" rows="5" cols="30">
enter feedback about your teacher here:
</textarea><br><br>
<input type="checkbox" name="eng" value="on">english
<input type="checkbox" name="phy" value="on">physics
<input type="checkbox" name="math" value="on">mathematics
<br><br><br><br><br><br>
chose from male and female
<input type="radio" name="r1" value="male">male
<input type="radio" name="r2" value="female">female
<br><br>
<select name= "cars">
<option value="vol">volvo</option>
<option value="zen">zen</option>
<option value="fiat" selected="selected">fiat</option>
<option value="audi">audi</option>
</select>
<br><br><br>
<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">
<input type="button" name="ok" value="ok"/>
<br>
<input type="image" name="imgbutton" src="1.jpg">
</form>
</body>
</html>