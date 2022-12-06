<html>  
<head>  
<title> Fibonacci Series</title>  
</head>  
<body bgcolor="gold">
<h2>Fibonacci series</h2> 
<?php
$count=0;
$num1=0;
$num2=1;
echo$num1.",";
echo$num2.",";
while($count<12)
{
$num3=$num2+$num1;
echo$num3.",";
$num1=$num2;
$num2=$num3;
$count=$count+1;
}
?>
</body>  
</html>
