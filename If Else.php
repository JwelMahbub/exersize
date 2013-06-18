<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form method="post">
<input type="text" name="number">
<input type="submit" name="submit" value="sub" >
</form>
<?php
$result=$_POST['number'];


if($result<40)
	{echo "you R failed.";
	}elseif($result==40 or $result<50){
		echo "You R Passed";
	}elseif($result==50 or $result<60){
		echo "Your Grade is B";
	}elseif($result==60 or $result<70){
		echo "You Grade is B+";
	}elseif($result==70 or $result<80){
		echo "Your Grade is -A";
	}elseif($result==80 or $result<90){
		echo "You Grade is A";
	}elseif($result==90 or $result<=100){
		echo "Your Grade is A+";
	}
	else
	{
		echo "your result has a Problem";
	
	}


?>
</body>
</html>