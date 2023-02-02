<!DOCTYPE html>
<html>
	<head>
		<title> Parameter Assignment </title>
	</head>
	<body>
<?php
        $fname = "";
        $lname = "";
        $age = 18;
        ?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Firat Name: = <input type="text" name="fname" value="<?php echo $fname;?>">
    <br><br>
    Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
    <br><br>
    age: <input type="number" name="age" value="<?php echo $age;?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>
<?php
    echo "Hello my name is ". $fname . " " . $lname;
    echo "I am ". $age . " years old and ";
?>
<?php
    if($age >= 18){
        echo "I can vote in the United States <br>";
    }else{
        echo "I cannot vote in the United States <br>";
    }
    ?>
    </body>
</html>
            