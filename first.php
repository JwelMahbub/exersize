<?php 
for($i=10;$i<101;$i=$i+10)
{

	echo $i;
	echo "<br>";

}


echo "<hr>";
for($j=10;$j>0;$j=$j-1)
{

	echo $j;
	echo "<br>";

}


echo "<hr>";
for($k=65;$k>0;$k=$k-1)
{

	echo $k;
	echo "<br>";

}


echo "<hr>";
for($m=0;$m<=24;$m=$m+2)
{

	echo $m;
	echo "<br>";

}


echo "<hr>";
for($n=1;$n<=25;$n=$n+2)
{

	echo $n;
	echo "<br>";

}


echo "<hr>";
$a='*';
for($p=1;$p<=5;$p=$p+1)
{
	echo $a,$a,$a,$a,$a;
	echo "<br>";

}




$letters=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
echo $letters['N'];
for($i=0;$i<26;$i++)
{
	echo $letters[$i];
	echo "<br>";
}
?>
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