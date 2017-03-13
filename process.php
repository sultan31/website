<?php include 'config.php';?>
<?php
	 $name = $_POST['username'];
	
	 $age = $_POST['age'];
	
	if(mysql_query("INSERT INTO user(name,age)VALUES('$name','$age')"))
	{
		echo "inserted successfully";
	}
	else
	{
		echo "insertion failed";
	}
?>