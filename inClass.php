<!DOCTYPE html>
<html>
	<head>
		<title> Parameter Assignment </title>
	</head>
	<body>
		<form method="post">
		<div class = "container">
			<div class = "form_group">
				<label> First Name: </label>
				<input type = "text" name = "fName" value = "" required/>
			</div>
			<div class = "form_group">
				<label> Last Name: </label>
				<input type = "text" name = "lName" value = "" required/>
			</div>
			<div class = "form_group">
				<label> Age: </label>
				<input type = "number" name = "age" value = "" required/>
			</div>
			<div class = "form_group">
				<label> Submit </label>
				<input type="submit" name = "submit">
			</div>
		</form>
		
    </body>
</html>
<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>